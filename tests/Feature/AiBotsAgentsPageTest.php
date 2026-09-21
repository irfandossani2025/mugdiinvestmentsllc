<?php

namespace Tests\Feature;

use Tests\TestCase;

class AiBotsAgentsPageTest extends TestCase
{
    public function test_ai_bots_agents_page_explains_voice_and_automation_capabilities(): void
    {
        $response = $this->get(route('ai-bots-agents'));

        $response
            ->assertOk()
            ->assertSeeText('AI agents that')
            ->assertSeeText('From first hello')
            ->assertSeeText('AI Voice Agents')
            ->assertSeeText('Sales & Support Bots')
            ->assertSeeText('Internal AI Copilots')
            ->assertSeeText('Autonomous Workflows')
            ->assertSee('videos/mugdi-ai-agent-demo.mp4', false)
            ->assertDontSee('youtube.com', false)
            ->assertSeeText('Powerful AI.')
            ->assertSeeText('Clear boundaries.');
    }
}
