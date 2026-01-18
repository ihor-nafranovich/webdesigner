<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $technologies = [
            ['React', 'Node.js', 'MongoDB'],
            ['Vue.js', 'Laravel', 'MySQL'],
            ['TypeScript', 'Express', 'PostgreSQL'],
            ['JavaScript', 'Firebase', 'SCSS'],
            ['PHP', 'MySQL', 'Bootstrap'],
            ['Python', 'Django', 'SQLite'],
        ];

        return [
            'title' => fake()->words(3, true),
            'description' => fake()->paragraph(3),
            'technologies' => fake()->randomElement($technologies),
            'demo_url' => fake()->optional(0.7)->url(),
            'github_url' => fake()->optional(0.8)->url(),
            'featured' => fake()->boolean(30), // 30% chance of being featured
            'sort_order' => fake()->numberBetween(1, 100),
        ];
    }

    /**
     * Indicate that the project is featured.
     */
    public function featured(): static
    {
        return $this->state(fn (array $attributes) => [
            'featured' => true,
        ]);
    }

    /**
     * Indicate that the project has no URLs.
     */
    public function withoutUrls(): static
    {
        return $this->state(fn (array $attributes) => [
            'demo_url' => null,
            'github_url' => null,
        ]);
    }
}
