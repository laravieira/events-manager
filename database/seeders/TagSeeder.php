<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::factory()->create(['name' => 'Laravel', 'slug' => 'laravel']);
        Tag::factory()->create(['name' => 'PHP', 'slug' => 'php']);
        Tag::factory()->create(['name' => 'JavaScript', 'slug' => 'javascript']);
        Tag::factory()->create(['name' => 'Vue.js', 'slug' => 'vuejs']);
        Tag::factory()->create(['name' => 'React', 'slug' => 'react']);
        Tag::factory()->create(['name' => 'Node.js', 'slug' => 'nodejs']);
        Tag::factory()->create(['name' => 'CSS', 'slug' => 'css']);
        Tag::factory()->create(['name' => 'HTML', 'slug' => 'html']);
        Tag::factory()->create(['name' => 'Bootstrap', 'slug' => 'bootstrap']);
        Tag::factory()->create(['name' => 'Tailwind CSS', 'slug' => 'tailwind-css']);
        Tag::factory()->create(['name' => 'MySQL', 'slug' => 'mysql']);
        Tag::factory()->create(['name' => 'PostgreSQL', 'slug' => 'postgresql']);
        Tag::factory()->create(['name' => 'MongoDB', 'slug' => 'mongodb']);
        Tag::factory()->create(['name' => 'Redis', 'slug' => 'redis']);
        Tag::factory()->create(['name' => 'Git', 'slug' => 'git']);
        Tag::factory()->create(['name' => 'GitHub', 'slug' => 'github']);
        Tag::factory()->create(['name' => 'GitLab', 'slug' => 'gitlab']);
        Tag::factory()->create(['name' => 'Docker', 'slug' => 'docker']);
        Tag::factory()->create(['name' => 'Kubernetes', 'slug' => 'kubernetes']);
        Tag::factory()->create(['name' => 'Linux', 'slug' => 'linux']);
        Tag::factory()->create(['name' => 'Ubuntu', 'slug' => 'ubuntu']);
        Tag::factory()->create(['name' => 'Debian', 'slug' => 'debian']);
        Tag::factory()->create(['name' => 'CentOS', 'slug' => 'centos']);
    }
}
