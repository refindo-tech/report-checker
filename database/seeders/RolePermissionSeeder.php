<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // buat permission dengan spatie models
        Permission::create(['name' => 'tambah-user']);
        Permission::create(['name' => 'edit-user']);
        Permission::create(['name' => 'hapus-user']);
        Permission::create(['name' => 'lihat-user']);

        Permission::create(['name' => 'tambah-role']);
        Permission::create(['name' => 'edit-role']);
        Permission::create(['name' => 'hapus-role']);
        Permission::create(['name' => 'lihat-role']);

        Permission::create(['name' => 'tambah-permission']);
        Permission::create(['name' => 'edit-permission']);
        Permission::create(['name' => 'hapus-permission']);
        Permission::create(['name' => 'lihat-permission']);

        Permission::create(['name' => 'tambah-laporan-akhir']);
        Permission::create(['name' => 'edit-laporan-akhir']);
        Permission::create(['name' => 'hapus-laporan-akhir']);
        Permission::create(['name' => 'lihat-laporan-akhir']);
        Permission::create(['name' => 'review-laporan-akhir']);

        Permission::create(['name' => 'tambah-mikroskill']);
        Permission::create(['name' => 'edit-mikroskill']);
        Permission::create(['name' => 'hapus-mikroskill']);
        Permission::create(['name' => 'lihat-mikroskill']);

        Permission::create(['name' => 'tambah-kampus']);
        Permission::create(['name' => 'edit-kampus']);
        Permission::create(['name' => 'hapus-kampus']);
        Permission::create(['name' => 'lihat-kampus']);

        Permission::create(['name' => 'tambah-assessment']);
        Permission::create(['name' => 'edit-assessment']);
        Permission::create(['name' => 'hapus-assessment']);
        Permission::create(['name' => 'lihat-assessment']);
        Permission::create(['name' => 'print-assessment']);

        // buat role dengan spatie models
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Dosen']);
        Role::create(['name' => 'Mahasiswa']);

        // cari role berdasarkan name
        $roleAdmin = Role::findByName('Admin');
        $roleDosen = Role::findByName('Dosen');
        $roleMahasiswa = Role::findByName('Mahasiswa');

        // memberikan permission ke role
        $roleAdmin->givePermissionTo('tambah-user');
        $roleAdmin->givePermissionTo('edit-user');
        $roleAdmin->givePermissionTo('hapus-user');
        $roleAdmin->givePermissionTo('lihat-user');

        $roleAdmin->givePermissionTo('hapus-laporan-akhir');
        $roleAdmin->givePermissionTo('lihat-laporan-akhir');

        $roleAdmin->givePermissionTo('lihat-role');
        $roleAdmin->givePermissionTo('lihat-permission');

        $roleAdmin->givePermissionTo('tambah-mikroskill');
        $roleAdmin->givePermissionTo('edit-mikroskill');
        $roleAdmin->givePermissionTo('hapus-mikroskill');
        $roleAdmin->givePermissionTo('lihat-mikroskill');

        $roleAdmin->givePermissionTo('tambah-kampus');
        $roleAdmin->givePermissionTo('edit-kampus');
        $roleAdmin->givePermissionTo('lihat-kampus');

        $roleDosen->givePermissionTo('review-laporan-akhir');
        $roleDosen->givePermissionTo('lihat-laporan-akhir');

        $roleDosen->givePermissionTo('tambah-mikroskill');
        $roleDosen->givePermissionTo('edit-mikroskill');
        $roleDosen->givePermissionTo('lihat-mikroskill');

        $roleDosen->givePermissionTo('tambah-assessment');
        $roleDosen->givePermissionTo('edit-assessment');
        $roleDosen->givePermissionTo('lihat-assessment');

        $roleDosen->givePermissionTo('lihat-kampus');

        $roleMahasiswa->givePermissionTo('tambah-laporan-akhir');
        $roleMahasiswa->givePermissionTo('lihat-laporan-akhir');
    }
}
