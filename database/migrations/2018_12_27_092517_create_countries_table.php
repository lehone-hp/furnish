<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        DB::table('countries')->insert([
            ['id' => 1, 'name' => 'Afghanistan', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 2, 'name' => 'Albania', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 3, 'name' => 'Algeria', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 4, 'name' => 'American Samoa', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 5, 'name' => 'Andorra', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 6, 'name' => 'Angola', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 7, 'name' => 'Anguilla', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 8, 'name' => 'Antartica', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 9, 'name' => 'Antigua and Barbuda', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 10, 'name' => 'Argentina', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 11, 'name' => 'Armenia', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 12, 'name' => 'Aruba', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 13, 'name' => 'Australia', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 14, 'name' => 'Austria', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 15, 'name' => 'Azerbaijan', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 16, 'name' => 'Bahamas', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 17, 'name' => 'Bahrain', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 18, 'name' => 'Bangladesh', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 19, 'name' => 'Barbados', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 20, 'name' => 'Belarus', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 21, 'name' => 'Belgium', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 22, 'name' => 'Belize', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 23, 'name' => 'Benin', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 24, 'name' => 'Bermuda', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 25, 'name' => 'Bhutan', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 26, 'name' => 'Bolivia', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 27, 'name' => 'Bosnia and Herzegowina', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 28, 'name' => 'Botswana', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 29, 'name' => 'Bouvet Island', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 30, 'name' => 'Brazil', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 31, 'name' => 'British Indian Ocean Territory', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 32, 'name' => 'Brunei Darussalam', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 33, 'name' => 'Bulgaria', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 34, 'name' => 'Burkina Faso', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 35, 'name' => 'Burundi', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 36, 'name' => 'Cambodia', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 37, 'name' => 'Cameroon', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 38, 'name' => 'Canada', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 39, 'name' => 'Cape Verde', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 40, 'name' => 'Cayman Islands', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 41, 'name' => 'Central African Republic', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 42, 'name' => 'Chad', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 43, 'name' => 'Chile', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 44, 'name' => 'China', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 45, 'name' => 'Christmas Island', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 46, 'name' => 'Cocos Islands', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 47, 'name' => 'Colombia', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 48, 'name' => 'Comoros', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 49, 'name' => 'Congo', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 50, 'name' => 'Congo', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 51, 'name' => 'Cook Islands', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 52, 'name' => 'Costa Rica', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 53, 'name' => "Cota D'Ivoire", 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 54, 'name' => 'Croatia', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 55, 'name' => 'Cuba', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 56, 'name' => 'Cyprus', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 57, 'name' => 'Czech Republic', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 58, 'name' => 'Denmark', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 59, 'name' => 'Djibouti', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 60, 'name' => 'Dominica', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 61, 'name' => 'Dominican Republic', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 62, 'name' => 'East Timor', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 63, 'name' => 'Ecuador', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 64, 'name' => 'Egypt', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 65, 'name' => 'El Salvador', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 66, 'name' => 'Equatorial Guinea', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 67, 'name' => 'Eritrea', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 68, 'name' => 'Estonia', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 69, 'name' => 'Ethiopia', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 70, 'name' => 'Falkland Islands', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 71, 'name' => 'Faroe Islands', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 72, 'name' => 'Fiji', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 73, 'name' => 'Finland', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 74, 'name' => 'France', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 75, 'name' => 'France Metropolitan', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 76, 'name' => 'French Guiana', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 77, 'name' => 'French Polynesia', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 78, 'name' => 'French Southern Territories', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 79, 'name' => 'Gabon', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 80, 'name' => 'Gambia', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 81, 'name' => 'Georgia', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 82, 'name' => 'Germany', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 83, 'name' => 'Ghana', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 84, 'name' => 'Gibraltar', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 85, 'name' => 'Greece', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 86, 'name' => 'Greenland', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 87, 'name' => 'Grenada', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 88, 'name' => 'Guadeloupe', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 89, 'name' => 'Guam', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 90, 'name' => 'Guatemala', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 91, 'name' => 'Guinea', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 92, 'name' => 'Guinea-Bissau', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 93, 'name' => 'Guyana', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 94, 'name' => 'Haiti', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 95, 'name' => 'Heard and McDonald Islands', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 96, 'name' => 'Holy See', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 97, 'name' => 'Honduras', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 98, 'name' => 'Hong Kong', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 99, 'name' => 'Hungary', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 100, 'name' => 'Iceland', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 101, 'name' => 'India', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 102, 'name' => 'Indonesia', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 103, 'name' => 'Iran', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 104, 'name' => 'Iraq', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 105, 'name' => 'Ireland', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 106, 'name' => 'Israel', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 107, 'name' => 'Italy', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 108, 'name' => 'Jamaica', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 109, 'name' => 'Japan', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 110, 'name' => 'Jordan', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 111, 'name' => 'Kazakhstan', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 112, 'name' => 'Kenya', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 113, 'name' => 'Kiribati', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 114, 'name' => "Democratic People's Republic of Korea", 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 115, 'name' => 'Korea', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 116, 'name' => 'Kuwait', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 117, 'name' => 'Kyrgyzstan', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 118, 'name' => "Lao People's Democratic Republic", 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 119, 'name' => 'Latvia', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 120, 'name' => 'Lebanon', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 121, 'name' => 'Lesotho', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 122, 'name' => 'Liberia', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 123, 'name' => 'Libyan Arab Jamahiriya', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 124, 'name' => 'Liechtenstein', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 125, 'name' => 'Lithuania', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 126, 'name' => 'Luxembourg', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 127, 'name' => 'Macau', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 128, 'name' => 'Macedonia', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 129, 'name' => 'Madagascar', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 130, 'name' => 'Malawi', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 131, 'name' => 'Malaysia', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 132, 'name' => 'Maldives', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 133, 'name' => 'Mali', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 134, 'name' => 'Malta', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 135, 'name' => 'Marshall Islands', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 136, 'name' => 'Martinique', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 137, 'name' => 'Mauritania', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 138, 'name' => 'Mauritius', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 139, 'name' => 'Mayotte', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 140, 'name' => 'Mexico', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 141, 'name' => 'Micronesia', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 142, 'name' => 'Moldova', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 143, 'name' => 'Monaco', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 144, 'name' => 'Mongolia', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 145, 'name' => 'Montserrat', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 146, 'name' => 'Morocco', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 147, 'name' => 'Mozambique', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 148, 'name' => 'Myanmar', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 149, 'name' => 'Namibia', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 150, 'name' => 'Nauru', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 151, 'name' => 'Nepal', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 152, 'name' => 'Netherlands', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 153, 'name' => 'Netherlands Antilles', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 154, 'name' => 'New Caledonia', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 155, 'name' => 'New Zealand', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 156, 'name' => 'Nicaragua', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 157, 'name' => 'Niger', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 158, 'name' => 'Nigeria', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 159, 'name' => 'Niue', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 160, 'name' => 'Norfolk Island', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 161, 'name' => 'Northern Mariana Islands', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 162, 'name' => 'Norway', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 163, 'name' => 'Oman', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 164, 'name' => 'Pakistan', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 165, 'name' => 'Palau', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 166, 'name' => 'Panama', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 167, 'name' => 'Papua New Guinea', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 168, 'name' => 'Paraguay', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 169, 'name' => 'Peru', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 170, 'name' => 'Philippines', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 171, 'name' => 'Pitcairn', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 172, 'name' => 'Poland', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 173, 'name' => 'Portugal', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 174, 'name' => 'Puerto Rico', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 175, 'name' => 'Qatar', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 176, 'name' => 'Reunion', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 177, 'name' => 'Romania', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 178, 'name' => 'Russia', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 179, 'name' => 'Rwanda', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 180, 'name' => 'Saint Kitts and Nevis', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 181, 'name' => 'Saint LUCIA', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 182, 'name' => 'Saint Vincent', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 183, 'name' => 'Samoa', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 184, 'name' => 'San Marino', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 185, 'name' => 'Sao Tome and Principe', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 186, 'name' => 'Saudi Arabia', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 187, 'name' => 'Senegal', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 188, 'name' => 'Seychelles', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 189, 'name' => 'Sierra', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 190, 'name' => 'Singapore', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 191, 'name' => 'Slovakia', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 192, 'name' => 'Slovenia', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 193, 'name' => 'Solomon Islands', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 194, 'name' => 'Somalia', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 195, 'name' => 'South Africa', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 196, 'name' => 'South Georgia', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 197, 'name' => 'Span', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 198, 'name' => 'SriLanka', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 199, 'name' => 'St. Helena', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 200, 'name' => 'St. Pierre and Miguelon', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 201, 'name' => 'Sudan', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 202, 'name' => 'Suriname', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 203, 'name' => 'Svalbard', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 204, 'name' => 'Swaziland', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 205, 'name' => 'Sweden', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 206, 'name' => 'Switzerland', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 207, 'name' => 'Syria', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 208, 'name' => 'Taiwan', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 209, 'name' => 'Tajikistan', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 210, 'name' => 'Tanzania', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 211, 'name' => 'Thailand', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 212, 'name' => 'Togo', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 213, 'name' => 'Tokelau', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 214, 'name' => 'Tonga', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 215, 'name' => 'Trinidad and Tobago', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 216, 'name' => 'Tunisia', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 217, 'name' => 'Turkey', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 218, 'name' => 'Turkmenistan', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 219, 'name' => 'Turks and Caicos', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 220, 'name' => 'Tuvalu', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 221, 'name' => 'Uganda', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 222, 'name' => 'Ukraine', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 223, 'name' => 'United Arab Emirates', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 224, 'name' => 'United Kingdom', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 225, 'name' => 'United States', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 226, 'name' => 'United States Minor Outlying Islands', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 227, 'name' => 'Uruguay', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 228, 'name' => 'Uzbekistan', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 229, 'name' => 'Vanuatu', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 230, 'name' => 'Venezuela', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 231, 'name' => 'Vietnam', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 232, 'name' => 'Virgin Islands (British)', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 233, 'name' => 'Virgin Islands (U.S)', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 234, 'name' => 'Wallis and Futana Islands', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 235, 'name' => 'Western Sahara', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 236, 'name' => 'Yemen', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 237, 'name' => 'Yugoslavia', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 238, 'name' => 'Zambia', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
            ['id' => 239, 'name' => 'Zimbabwe', 'created_at' => '2018-12-27 10:13:24', 'updated_at' => '2018-12-27 10:13:24'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
