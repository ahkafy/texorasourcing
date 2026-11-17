<?php

namespace Tests\Feature;

use App\Models\Inquiry;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SourcingWebsiteTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that all marketing pages render with 200 OK.
     */
    public function test_marketing_pages_are_accessible(): void
    {
        $routes = [
            '/',
            '/about',
            '/products',
            '/services',
            '/quality-compliance',
            '/buyers',
            '/company-profile',
            '/contact',
        ];

        foreach ($routes as $route) {
            $response = $this->get($route);
            $response->assertStatus(200);
            $response->assertDontSee('YM INC', false);
            $response->assertDontSee('Ardene', false);
            $response->assertDontSee('Suzy Shier', false);
            $response->assertDontSee('Sun Asia', false);
            $response->assertDontSee('Nordstrom', false);
        }
    }

    /**
     * Test that the home page contains essential buyer marketing content.
     */
    public function test_home_page_displays_essential_buyer_content(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Texora Sourcing');
        $response->assertSee('Md. Ataul Hai');
        $response->assertSee('19+');
        $response->assertDontSee('YM INC');
        $response->assertDontSee('ARDENE');
        $response->assertDontSee('SUZY SHIER');
        $response->assertDontSee('SUN ASIA');
        $response->assertSee('BRAKBDDH');
    }

    /**
     * Test that an international buyer can submit a sourcing RFQ.
     */
    public function test_buyer_can_submit_sourcing_inquiry(): void
    {
        $data = [
            'name' => 'Michael Canadian Buyer',
            'email' => 'michael@retailcanada.ca',
            'phone' => '+1 416 123 4567',
            'company_name' => 'Northern Retail Group',
            'country' => 'Canada',
            'inquiry_type' => 'rfq',
            'product_category' => 'Knitwear',
            'target_quantity' => '5,000 - 10,000 pcs',
            'target_delivery_date' => 'October 2026',
            'payment_terms' => 'L/C',
            'message' => 'Looking to source 100% cotton crewneck t-shirts (180 GSM) and heavyweight fleece hoodies (320 GSM).',
        ];

        $response = $this->post('/inquiry', $data);

        $response->assertSessionHas('success');
        $this->assertDatabaseHas('inquiries', [
            'email' => 'michael@retailcanada.ca',
            'company_name' => 'Northern Retail Group',
            'product_category' => 'Knitwear',
            'status' => 'new',
        ]);
    }

    /**
     * Test that inquiry submission validates required fields.
     */
    public function test_inquiry_requires_name_email_and_message(): void
    {
        $response = $this->post('/inquiry', []);

        $response->assertSessionHasErrors(['name', 'email', 'message']);
        $this->assertEquals(0, Inquiry::count());
    }
}
