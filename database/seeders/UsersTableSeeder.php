<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Gerardo Belot',
                'email' => 'gbelot2003@hotmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$BM6SJIGfcorFexcOgqpRKeY1e/Byk6T91HN5wSYShEn4u8nwUPh4.',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'N3UUnnVsPnlmu2NxXiq2Z1nmh5HKGIDWsK3b1B66QOeSlEROF2lF4aDonAUh',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'state' => 1,
                'created_at' => '2021-04-09 16:33:57',
                'updated_at' => '2021-04-12 17:18:26',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Guinevere Chan',
                'email' => 'mytemipag@mailinator.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$QrWTYxKMag74Prk3CQ10behL.adhcrE7v8n3nS.K1ePz0s.Sv6nlm',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'state' => 1,
                'created_at' => '2021-04-11 17:42:11',
                'updated_at' => '2021-04-11 17:42:11',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Gilbert Lubowitz',
                'email' => 'schuppe.edgar@example.com',
                'email_verified_at' => '2021-04-12 17:10:20',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'OZ36znerNY',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'state' => 1,
                'created_at' => '2021-04-12 17:10:20',
                'updated_at' => '2021-04-12 17:10:20',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Junior Trantow',
                'email' => 'okuneva.vladimir@example.org',
                'email_verified_at' => '2021-04-12 17:10:20',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => '01BZdjJ9uW',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'state' => 1,
                'created_at' => '2021-04-12 17:10:21',
                'updated_at' => '2021-04-12 17:10:21',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Napoleon Prosacco',
                'email' => 'joseph58@example.com',
                'email_verified_at' => '2021-04-12 17:10:20',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'sQNNjRAYGJ',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'state' => 1,
                'created_at' => '2021-04-12 17:10:21',
                'updated_at' => '2021-04-12 17:10:21',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Jackie Botsford II',
                'email' => 'brolfson@example.com',
                'email_verified_at' => '2021-04-12 17:10:20',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'B225RV3XuA',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'state' => 1,
                'created_at' => '2021-04-12 17:10:21',
                'updated_at' => '2021-04-12 17:10:21',
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Mr. Thomas Schowalter',
                'email' => 'owen82@example.com',
                'email_verified_at' => '2021-04-12 17:10:20',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => '3WUQBNhC2s',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'state' => 1,
                'created_at' => '2021-04-12 17:10:21',
                'updated_at' => '2021-04-12 17:10:21',
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'Lincoln Kuvalis',
                'email' => 'marquardt.wilber@example.net',
                'email_verified_at' => '2021-04-12 17:10:20',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'Vc1emnzv1P',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'state' => 1,
                'created_at' => '2021-04-12 17:10:21',
                'updated_at' => '2021-04-12 17:10:21',
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'Tania Labadie',
                'email' => 'weimann.david@example.org',
                'email_verified_at' => '2021-04-12 17:10:20',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => '9ywSgqZXBL',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'state' => 1,
                'created_at' => '2021-04-12 17:10:21',
                'updated_at' => '2021-04-12 17:10:21',
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'Annabell Shanahan',
                'email' => 'llakin@example.com',
                'email_verified_at' => '2021-04-12 17:10:20',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'xgVt3LLBMC',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'state' => 1,
                'created_at' => '2021-04-12 17:10:21',
                'updated_at' => '2021-04-12 17:10:21',
            ),
            10 =>
            array (
                'id' => 11,
                'name' => 'Bethany Cole',
                'email' => 'hazel34@example.com',
                'email_verified_at' => '2021-04-12 17:10:20',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'la2gk8gKqC',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'state' => 1,
                'created_at' => '2021-04-12 17:10:21',
                'updated_at' => '2021-04-12 17:10:21',
            ),
            11 =>
            array (
                'id' => 12,
                'name' => 'Mr. Gaston Kunde',
                'email' => 'parker.stark@example.net',
                'email_verified_at' => '2021-04-12 17:10:20',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'RR79Omw2WV',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'state' => 1,
                'created_at' => '2021-04-12 17:10:21',
                'updated_at' => '2021-04-12 17:10:21',
            ),
        ));

        $user = User::find(1);
        $user->assignRole('administrador');

		$user = User::find(2);
        $user->assignRole('editor');

		$user = User::find(3);
        $user->assignRole('editor');

		$user = User::find(4);
        $user->assignRole('maestro');

		$user = User::find(5);
        $user->assignRole('maestro');

		$user = User::find(6);
        $user->assignRole('padre');

		$user = User::find(7);
        $user->assignRole('alumno');

		$user = User::find(8);
        $user->assignRole('alumno');
    }
}
