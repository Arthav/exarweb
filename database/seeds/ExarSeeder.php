<?php

use Illuminate\Database\Seeder;

class ExarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mpolicies')->insert([

            [
              'id' => '1',
              'nama' => 'Admin Policy',
              'co_broke' => 'yes',
              'reference' => 'yes',
              'min_sell' => '0',
              'split_fee' => '0',
              'co_fee' => '50',
              'reference_fee' => '20',
              'ppn' => '2.5',
              'delete' => '0',
            ],
            [
              'id' => '2',
              'nama' => 'Manager Policy',
              'co_broke' => 'yes',
              'reference' => 'yes',
              'min_sell' => '0',
              'split_fee' => '20',
              'co_fee' => '50',
              'reference_fee' => '20',
              'ppn' => '2.5',
              'delete' => '0',
            ],
            [
              'id' => '3',
              'nama' => 'Default Agen Policy',
              'co_broke' => 'yes',
              'reference' => 'yes',
              'min_sell' => '1',
              'split_fee' => '50',
              'co_fee' => '50',
              'reference_fee' => '20',
              'ppn' => '2.5',
              'delete' => '0',
            ],
            [
              'id' => '4',
              'nama' => 'Senior Marketing Policy',
              'co_broke' => 'yes',
              'reference' => 'yes',
              'min_sell' => '1',
              'split_fee' => '40',
              'co_fee' => '50',
              'reference_fee' => '20',
              'ppn' => '2.5',
              'delete' => '0',
            ]
            
          ]);
  
  
          DB::table('mroles')->insert([
  
              [
                'id' => '1',
                'nama' => 'Admin',
                'level' => '1',
                'delet' => '0',
                'mpolicy_id' => '1',
              ],
              [
                'id' => '2',
                'nama' => 'Manager',
                'level' => '1',
                'delet' => '0',
                'mpolicy_id' => '1',
              ],
              [
                'id' => '3',
                'nama' => 'Marketing Executive',
                'level' => '2',
                'delet' => '0',
                'mpolicy_id' => '3',
              ],
              [
                'id' => '4',
                'nama' => 'Senior Marketing Executive',
                'level' => '2',
                'delet' => '0',
                'mpolicy_id' => '4',
              ]
            ]);
  
            DB::table('mdevelopers')->insert([
  
              [
                'id' => '1',
                'nama' => 'Ciputri',
                'kontak' => '082233857520',
                'email' => 'ciputri@gmail.com',
                'delet' => '0',
              ]
            ]);
  
  
            DB::table('users')->insert([
  
              [
                'id' => '1',
                'name' => 'Christian',
                'email' => 'christianbonafena7@gmail.com',
                'alamat' => 'surabaya',
                'nik' => '13450230302040',
                'npwp' => '1230120490324',
                'telp1' => '082212312312',
                'telp2' => '082212342323',
                'jeniskelamin' => 'Pria',
                'mrole_id' => '1',
                'password' => bcrypt('123123'),
                'agama' => 'Kristen'
              ],
              [
                'id' => '2',
                'name' => 'Arzen',
                'email' => 'arzen@gmail.com',
                'alamat' => 'Sidoarjo',
                'nik' => '4124123123',
                'npwp' => '2312312343435',
                'telp1' => '034929304990',
                'telp2' => '093059238400',
                'jeniskelamin' => 'Pria',
                'mrole_id' => '2',
                'password' => bcrypt('123123'),
                'agama' => 'Islam'
              ],
              [
                'id' => '3',
                'name' => 'Sarumin',
                'email' => 'Sarumin@gmail.com',
                'alamat' => 'Sidoarjo',
                'nik' => '1024091242039',
                'npwp' => '04923049030',
                'telp1' => '49405340034',
                'telp2' => '49203404040',
                'jeniskelamin' => 'Wanita',
                'mrole_id' => '3',
                'password' => bcrypt('123123'),
                'agama' => 'Buddha'
              ]
            ]);
  
          
  
            
            DB::table('mlistings')->insert([
  
              [
                'id' => '1',
                'nama' => 'Rumah wiyung dijual cepat',
                'jenis_list' => 'Dijual',
                'price' => '1000000000',     
                'commission' => '3',
                'nama_pemilik' => 'Robby',
                'no_pemilik' => '0822229392393', 
                'tipe_unit' => '0',
                'total_unit' => '0',
                'available_unit' => '0', 
                'jenis_properti' => 'Rumah',
                'luas_bangunan' => '1000',
                'luas_tanah' => '1200', 
                'tinggi' => '2',
                'lantai' => '0',
                'lokasi' => 'Taman Pondok Indah', 
                'kamar_mandi' => '3',
                'kamar_tidur' => '4',
                'arah_properti' => 'Timur',
                'spesifikasi' => 'Rumah mantab mantul mantul enak dilihat, tidak cocok dijilat apalagi dicelupin',
                'kota' => 'Surabaya',
                'listrik' => '3300',
                'legalitas' => 'PPJB',
                'delet' => '0',
                'sold' => '0',
                'user_id' => '1',
              ],
              [
                'id' => '2',
                'nama' => 'Rumah Dijual Pakuwon Indah',
                'jenis_list' => 'Dijual',
                'price' => '6000000000',     
                'commission' => '3',
                'nama_pemilik' => 'Robby',
                'no_pemilik' => '0822229392393', 
                'tipe_unit' => '0',
                'total_unit' => '0',
                'available_unit' => '0', 
                'jenis_property' => 'Rumah',
                'luas_bangunan' => '250',
                'luas_tanah' => '180', 
                'tinggi' => '2',
                'lantai' => '0',
                'lokasi' => 'Pakuwon Indah Cluster The Mansion', 
                'kamar_mandi' => '3',
                'kamar_tidur' => '3',
                'arah_properti' => 'Utara',
                'spesifikasi' => 'Rumah mantab mantul mantul enak dilihat, tidak cocok dijilat apalagi dicelupin',
                'kota' => 'Surabaya',
                'listrik' => '3300',
                'legalitas' => 'PPJB',
                'delet' => '0',
                'sold' => '1',
                'user_id' => '2',
              ],
              [
                'id' => '3',
                'nama' => 'Apartemen pbg disewakan',
                'jenis_list' => 'Disewakan',
                'price' => '30000000',     
                'commission' => '3',
                'nama_pemilik' => 'Robby',
                'no_pemilik' => '0822229392393', 
                'tipe_unit' => '0',
                'total_unit' => '0',
                'available_unit' => '0', 
                'jenis_property' => 'Apartemen',
                'luas_bangunan' => '52',
                'luas_tanah' => '0', 
                'tinggi' => '1',
                'lantai' => '19',
                'lokasi' => 'Jalan Bukit Darmo Boulevard', 
                'kamar_mandi' => '1',
                'kamar_tidur' => '2',
                'arah_properti' => 'Utara',
                'spesifikasi' => 'Unfurnished 2 ac',
                'kota' => 'Surabaya',
                'listrik' => '3300',
                'legalitas' => 'PPJB',
                'delet' => '0',
                'sold' => '1',
                'user_id' => '3',
              ],
              [
                'id' => '4',
                'nama' => 'Apartemen pbg dijualkan',
                'jenis_list' => 'Disewakan',
                'price' => '30000000',     
                'commission' => '3',
                'nama_pemilik' => 'Robby',
                'no_pemilik' => '0822229392393', 
                'tipe_unit' => '0',
                'total_unit' => '0',
                'available_unit' => '0', 
                'jenis_property' => 'Apartemen',
                'luas_bangunan' => '52',
                'luas_tanah' => '0', 
                'tinggi' => '1',
                'lantai' => '19',
                'lokasi' => 'Jalan Bukit Darmo Boulevard', 
                'kamar_mandi' => '1',
                'kamar_tidur' => '2',
                'arah_properti' => 'Utara',
                'spesifikasi' => 'Unfurnished 2 ac',
                'kota' => 'Surabaya',
                'listrik' => '3300',
                'legalitas' => 'PPJB',
                'delet' => '0',
                'sold' => '1',
                'user_id' => '3',
              ]
            ]);
  
            DB::table('mtransactions')->insert([
  
              [
                'id' => '1',
                'property_sold' => '1',
                'delet' => '0',
                'co_broke' => 'no',
                'reference' => 'no',
                'final_commission' => '5',
                'split_fee' => '50',
                'co_fee' => '50',
                'reference_fee' => '20',
                'close_price' => '30000000',
                'mlisting_id' => '3',
                'ppn' => '2.5',
                'created_at' => '2019-01-21',

              ],
              [
                'id' => '2',
                'property_sold' => '1',
                'delet' => '0',
                'co_broke' => 'no',
                'reference' => 'no',
                'final_commission' => '3',
                'split_fee' => '50',
                'co_fee' => '50',
                'reference_fee' => '20',
                'close_price' => '6000000000',
                'mlisting_id' => '2',
                'ppn' => '2.5',
                'created_at' => '2019-02-21',

              ],
              [
                'id' => '3',
                'property_sold' => '1',
                'delet' => '0',
                'co_broke' => 'no',
                'reference' => 'no',
                'final_commission' => '3',
                'split_fee' => '50',
                'co_fee' => '50',
                'reference_fee' => '20',
                'close_price' => '30000000',
                'mlisting_id' => '4',
                'ppn' => '2.5',
                'created_at' => '2019-02-21',

              ]
            ]);

            DB::table('images')->insert([
  
              [
                'imageid' => '1',  
                'mlisting_id'=>'1',
              ],
              [
                'imageid' => '2',  
                'mlisting_id'=>'2',
              ],
              [
                'imageid' => '3',  
                'mlisting_id'=>'3',
              ],
              [
                'imageid' => '4',  
                'mlisting_id'=>'4',
              ],
              [
                'imageid' => '5',  
                'mlisting_id'=>'1',
              ]
              ]);
  
  
            DB::table('mleads')->insert([
  
              [
                'id' => '1',
                'name' => 'Farna',
                'contact' => '08218499234',
                'email' => 'farclose@gmail.com',
                'tipe' => '1',
                'delet' => '0',
                'deskripsi' => 'Calon buyer properti rumah wiyung, cari rumah 1 lantai',
                'user_id' => '1',   
              ]
            ]);
    }
}
