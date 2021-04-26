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
 * App\Models\AcademyClass
 *
 * @property int $id
 * @property string $name
 * @property string $skill_competence
 * @property int $status
 * @property int $school_year_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $status_text
 * @property-read \App\Models\SchoolYear $schoolYear
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Student[] $students
 * @property-read int|null $students_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Teacher[] $teachers
 * @property-read int|null $teachers_count
 * @method static \Illuminate\Database\Eloquent\Builder|AcademyClass newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AcademyClass newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AcademyClass query()
 * @method static \Illuminate\Database\Eloquent\Builder|AcademyClass search($search)
 * @method static \Illuminate\Database\Eloquent\Builder|AcademyClass searchLatestPaginated(string $search, string $paginationQuantity = 10)
 * @method static \Illuminate\Database\Eloquent\Builder|AcademyClass whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AcademyClass whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AcademyClass whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AcademyClass whereSchoolYearId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AcademyClass whereSkillCompetence($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AcademyClass whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AcademyClass whereUpdatedAt($value)
 */
	class AcademyClass extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AcademyClassStudent
 *
 * @property int $id
 * @property int $academy_class_id
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\AcademyClass $academyClass
 * @method static \Illuminate\Database\Eloquent\Builder|AcademyClassStudent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AcademyClassStudent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AcademyClassStudent query()
 * @method static \Illuminate\Database\Eloquent\Builder|AcademyClassStudent search($search)
 * @method static \Illuminate\Database\Eloquent\Builder|AcademyClassStudent searchLatestPaginated(string $search, string $paginationQuantity = 10)
 * @method static \Illuminate\Database\Eloquent\Builder|AcademyClassStudent whereAcademyClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AcademyClassStudent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AcademyClassStudent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AcademyClassStudent whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AcademyClassStudent whereUpdatedAt($value)
 */
	class AcademyClassStudent extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Address
 *
 * @property int $id
 * @property string $full_address
 * @property string|null $neighbourhood RT
 * @property string|null $hamlet RW
 * @property string|null $urban_village Kelurahan
 * @property string|null $sub_district Kecamatan
 * @property string|null $city
 * @property string|null $postal_code
 * @property int $addressable_id
 * @property string $addressable_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $addressable
 * @method static \Illuminate\Database\Eloquent\Builder|Address newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address query()
 * @method static \Illuminate\Database\Eloquent\Builder|Address search($search)
 * @method static \Illuminate\Database\Eloquent\Builder|Address searchLatestPaginated(string $search, string $paginationQuantity = 10)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereAddressableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereAddressableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereFullAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereHamlet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereNeighbourhood($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereSubDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereUrbanVillage($value)
 */
	class Address extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Payment
 *
 * @property int $id
 * @property string $uniq_code
 * @property int $user_id
 * @property int $student_id
 * @property int $school_fee_id
 * @property string|null $note
 * @property \Illuminate\Support\Carbon $date_paid
 * @property string|null $month
 * @property int $amount
 * @property string|null $qr_path
 * @property string|null $invoice_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $invoice_url
 * @property-read mixed $qr_url
 * @property-read \App\Models\SchoolFee $schoolFee
 * @property-read \App\Models\Student $student
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment search($search)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment searchLatestPaginated(string $search, string $paginationQuantity = 10)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereDatePaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereInvoicePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereMonth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereQrPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereSchoolFeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUniqCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUserId($value)
 */
	class Payment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PersonalInformation
 *
 * @property int $id
 * @property string|null $phone_number
 * @property string|null $gender Laki-laki dan perempuan
 * @property string|null $place_of_birth
 * @property \datetime|null $date_of_birth
 * @property string|null $religion
 * @property int $personal_informationable_id
 * @property string $personal_informationable_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $personalInformationable
 * @property-write mixed $date
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalInformation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalInformation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalInformation query()
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalInformation search($search)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalInformation searchLatestPaginated(string $search, string $paginationQuantity = 10)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalInformation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalInformation whereDateOfBirth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalInformation whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalInformation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalInformation wherePersonalInformationableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalInformation wherePersonalInformationableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalInformation wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalInformation wherePlaceOfBirth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalInformation whereReligion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalInformation whereUpdatedAt($value)
 */
	class PersonalInformation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SchoolFee
 *
 * @property int $id
 * @property string $year
 * @property int $nominal
 * @property bool $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Payment[] $payments
 * @property-read int|null $payments_count
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolFee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolFee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolFee query()
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolFee search($search)
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolFee searchLatestPaginated(string $search, string $paginationQuantity = 10)
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolFee whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolFee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolFee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolFee whereNominal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolFee whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolFee whereYear($value)
 */
	class SchoolFee extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SchoolYear
 *
 * @property int $id
 * @property string $school_year
 * @property string $title
 * @property \Illuminate\Support\Carbon $start_date
 * @property \Illuminate\Support\Carbon $end_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\AcademyClass[] $classes
 * @property-read int|null $classes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Student[] $students
 * @property-read int|null $students_count
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolYear newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolYear newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolYear query()
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolYear search($search)
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolYear searchLatestPaginated(string $search, string $paginationQuantity = 10)
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolYear whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolYear whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolYear whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolYear whereSchoolYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolYear whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolYear whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolYear whereUpdatedAt($value)
 */
	class SchoolYear extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Student
 *
 * @property int $id
 * @property int $academy_class_student_id
 * @property string|null $nis
 * @property string|null $nisn
 * @property string|null $entry_year
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\AcademyClass $academyClassStudent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Payment[] $payments
 * @property-read int|null $payments_count
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Student newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Student newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Student query()
 * @method static \Illuminate\Database\Eloquent\Builder|Student search($search)
 * @method static \Illuminate\Database\Eloquent\Builder|Student searchLatestPaginated(string $search, string $paginationQuantity = 10)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereAcademyClassStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereEntryYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereNis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereNisn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereUpdatedAt($value)
 */
	class Student extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Teacher
 *
 * @property int $id
 * @property string|null $nip
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\AcademyClass[] $homeroomTeachers
 * @property-read int|null $homeroom_teachers_count
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher query()
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher search($search)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher searchLatestPaginated(string $search, string $paginationQuantity = 10)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereNip($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereUpdatedAt($value)
 */
	class Teacher extends \Eloquent {}
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
 * @property string|null $remember_token
 * @property string|null $profile_photo_path
 * @property int $status_code 0=pending, 1=aktif, 2=diblokir, 3=alumni
 * @property int|null $userable_id
 * @property string|null $userable_type
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $additionalInformation
 * @property-read \App\Models\Address|null $address
 * @property-read string $profile_photo_url
 * @property-read mixed $status_text
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Payment[] $payments
 * @property-read int|null $payments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \App\Models\PersonalInformation|null $personalInformation
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Query\Builder|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User search($search)
 * @method static \Illuminate\Database\Eloquent\Builder|User searchLatestPaginated(string $search, string $paginationQuantity = 10)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfilePhotoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereStatusCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserableType($value)
 * @method static \Illuminate\Database\Query\Builder|User withTrashed()
 * @method static \Illuminate\Database\Query\Builder|User withoutTrashed()
 */
	class User extends \Eloquent {}
}

