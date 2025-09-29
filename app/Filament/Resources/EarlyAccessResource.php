<?php
namespace App\Filament\Resources;
use App\Filament\Resources\EarlyAccessResource\Pages;
use App\Filament\Resources\EarlyAccessResource\RelationManagers;
use App\Models\EarlyAccess;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\BooleanColumn;
class EarlyAccessResource extends Resource
{
    protected static ?string $model = EarlyAccess::class;
    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';
    protected static ?string $navigationGroup = 'Marketing';
    protected static ?string $label = 'Early Access';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->unique(EarlyAccess::class, 'email', ignoreRecord: true),
                Forms\Components\TextInput::make('name')->label('Full Name')->maxLength(255),
                Forms\Components\TextInput::make('company')->maxLength(255),
                Forms\Components\TextInput::make('job_title')->maxLength(255),
                Forms\Components\Textarea::make('notes')->rows(3),
                Forms\Components\TextInput::make('country')->maxLength(255),
                Forms\Components\TextInput::make('source')->maxLength(255),
                Forms\Components\TextInput::make('referral_code')->maxLength(255),
                Forms\Components\Checkbox::make('subscribed')->label('Subscribed'),
                Forms\Components\Textarea::make('interests')
                    ->label('Interests (JSON format)')
                    ->rows(3),
                Forms\Components\TextInput::make('signup_ip')
                    ->label('Device IP')
                    ->disabled()
                    ->default(fn() => request()->ip()),
            ]);
    }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('email')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('signup_ip')->sortable()->searchable(),
                BooleanColumn::make('subscribed')->label('Subscribed')->sortable(),
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('company')->sortable(),
                Tables\Columns\TextColumn::make('source')->sortable(),
                Tables\Columns\TextColumn::make('created_at')->dateTime(),
            ])->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('subscribed')
                    ->options([
                        1 => 'Subscribed',
                        0 => 'Unsubscribed',
                    ]),
                Tables\Filters\SelectFilter::make('country')
                    ->options(function () {
                        return EarlyAccess::query()
                            ->distinct()
                            ->pluck('country', 'country')
                            ->filter()
                            ->toArray();
                    }),
                Tables\Filters\SelectFilter::make('source')
                    ->options(function () {
                        return EarlyAccess::query()
                            ->distinct()
                            ->pluck('source', 'source')
                            ->filter()
                            ->toArray();
                    }),
                Tables\Filters\TrashedFilter::make(), // Show trashed / soft-deleted records
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEarlyAccesses::route('/'),
            'create' => Pages\CreateEarlyAccess::route('/create'),
            'edit' => Pages\EditEarlyAccess::route('/{record}/edit'),
        ];
    }
}
