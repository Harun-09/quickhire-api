<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;

class JobSeeder extends Seeder
{
    public function run(): void
    {
        Job::create([
            'title' => 'Social Media Assistant',
            'company' => 'Nomad',
            'location' => 'Paris, France',
            'category' => 'Marketing',
            'type' => 'Full-time',
            'salary_range' => '$75k - $85k',
            'description' => 'Nomad is looking for a Social Media Assistant to join our marketing team.',
            'responsibilities' => "Manage social media accounts\nCreate engaging content\nMonitor analytics",
            'requirements' => "Bachelor's degree in Marketing\n1+ years of experience\nExcellent writing skills",
            'benefits' => "Flexible hours\nHealth insurance\nRemote work options"
        ]);

        Job::create([
            'title' => 'Brand Designer',
            'company' => 'Dropbox',
            'location' => 'San Francisco, USA',
            'category' => 'Design',
            'type' => 'Full-time',
            'salary_range' => '$120k - $150k',
            'description' => 'Dropbox is seeking a talented Brand Designer to help shape our visual identity.',
            'responsibilities' => "Create visual assets for marketing\nCollaborate with product teams\nEnsure brand consistency",
            'requirements' => "5+ years of design experience\nProficiency in Figma and Adobe Suite",
            'benefits' => "Equity options\nProfessional development budget\nFree lunch"
        ]);

        Job::create([
            'title' => 'Interactive Developer',
            'company' => 'Terraform',
            'location' => 'Berlin, Germany',
            'category' => 'Engineering',
            'type' => 'Full-time',
            'salary_range' => '$90k - $110k',
            'description' => 'Terraform is looking for an Interactive Developer to build amazing web experiences.',
            'responsibilities' => "Develop front-end features\nIntegrate with backend APIs\nOptimize performance",
            'requirements' => "Strong Javascript skills\nExperience with React and Next.js",
            'benefits' => "Unlimited PTO\nLatest equipment\nTeam retreats"
        ]);
    }
}
