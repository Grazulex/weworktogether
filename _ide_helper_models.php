<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Office
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $description
 * @property \App\Enums\StatusEnum $status
 * @property object $location
 * @property int $places
 * @property array|null $days
 * @property bool $is_free
 * @property bool $have_desk
 * @property bool $have_printer
 * @property bool $have_scanner
 * @property bool $have_fax
 * @property bool $have_internet
 * @property bool $have_meeting_room
 * @property bool $have_parking
 * @property int $have_kitchen
 * @property int $tranquility
 * @property int $workspace
 * @property bool $give_coffee
 * @property bool $give_water
 * @property bool $have_fridge
 * @property bool $have_microwave
 * @property bool $have_garden
 * @property bool $accept_smoking
 * @property array|null $accept_languages
 * @property \Illuminate\Support\Carbon|null $verified_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\OfficeSearch[] $searches
 * @property-read int|null $searches_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Office newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Office newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Office query()
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereAcceptLanguages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereAcceptSmoking($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereDays($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereGiveCoffee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereGiveWater($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereHaveDesk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereHaveFax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereHaveFridge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereHaveGarden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereHaveInternet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereHaveKitchen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereHaveMeetingRoom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereHaveMicrowave($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereHaveParking($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereHavePrinter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereHaveScanner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereIsFree($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office wherePlaces($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereTranquility($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereWorkspace($value)
 */
	class Office extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OfficeSearch
 *
 * @property int $id
 * @property int $search_id
 * @property int $office_id
 * @property int $distance
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Office $office
 * @property-read \App\Models\Search $search
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeSearch newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeSearch newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeSearch query()
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeSearch whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeSearch whereDistance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeSearch whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeSearch whereOfficeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeSearch whereSearchId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeSearch whereUpdatedAt($value)
 */
	class OfficeSearch extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Search
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $description
 * @property \App\Enums\StatusEnum $status
 * @property object $location
 * @property int $distance
 * @property \Illuminate\Support\Carbon|null $verified_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\OfficeSearch[] $offices
 * @property-read int|null $offices_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Search newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Search newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Search query()
 * @method static \Illuminate\Database\Eloquent\Builder|Search whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Search whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Search whereDistance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Search whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Search whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Search whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Search whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Search whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Search whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Search whereVerifiedAt($value)
 */
	class Search extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $two_factor_confirmed_at
 * @property int $limit
 * @property bool $is_admin
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $fullname
 * @property-read mixed $has_confirmed_two_factor
 * @property-read mixed $has_enabled_two_factor
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Office[] $offices
 * @property-read int|null $offices_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Search[] $searches
 * @property-read int|null $searches_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorConfirmedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent implements \Illuminate\Contracts\Auth\MustVerifyEmail, \Filament\Models\Contracts\FilamentUser {}
}

