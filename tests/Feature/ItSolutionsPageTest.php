<?php

namespace Tests\Feature;

use Tests\TestCase;

class ItSolutionsPageTest extends TestCase
{
    public function test_it_solutions_page_presents_the_core_technology_services(): void
    {
        $response = $this->get(route('it-solutions'));

        $response
            ->assertOk()
            ->assertSeeText('Technology shaped')
            ->assertSeeText('Websites & Digital Platforms')
            ->assertSeeText('Custom ERP Systems')
            ->assertSeeText('Custom AI Bots & Agents')
            ->assertSee(route('ai-bots-agents'), false)
            ->assertSeeText('Integrations & Automation')
            ->assertSeeText('Cloud & Infrastructure')
            ->assertSeeText('Data, Dashboards & Security');
    }
}
