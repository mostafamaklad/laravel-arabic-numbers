<?php

namespace Maklad\ArabicNumbers\Test;

use Illuminate\Http\Request;
use PHPUnit\Framework\TestCase;

class ArabicNumbersTest extends TestCase
{
    public function testArabicNumbers()
    {
        $middleware = new TestMiddleware();
        $request_data = [
            'name' => 'Mostafa',
            'age' => '٢٧',
            'cell_number' => '١٢٣٤٥٦'
        ];

        $request = new Request($request_data);

        $middleware->handle($request, function (Request $request) {
            $this->assertEquals('Mostafa', $request->get('name'));
            $this->assertEquals(27, $request->get('age'));
            $this->assertEquals('123456', $request->get('cell_number'));
        });
    }

    public function testInnerArabicNumbers()
    {
        $middleware = new TestMiddleware();
        $request_data = [
            'user_data' => [
                'name' => 'Mostafa',
                'age' => '٢٧',
                'cell_number' => '١٢٣٤٥٦'
            ]
        ];

        $request = new Request($request_data);

        $middleware->handle($request, function (Request $request) {
            $nested_data = $request->get('user_data');
            $this->assertEquals('Mostafa', $nested_data['name']);
            $this->assertEquals(27, $nested_data['age']);
            $this->assertEquals('123456', $nested_data['cell_number']);
        });
    }

    public function testExceptArabicNumbers()
    {
        $middleware = new TestMiddleware();
        $request_data = [
            'name' => 'Mostafa',
            'age' => '٢٧',
            'cell_number' => '١٢٣٤٥٦',
            'password' => '١٢٣٤٥٦٧٨٩٠'
        ];

        $request = new Request($request_data);

        $middleware->handle($request, function (Request $request) {
            $this->assertEquals('Mostafa', $request->get('name'));
            $this->assertEquals(27, $request->get('age'));
            $this->assertEquals('123456', $request->get('cell_number'));
            $this->assertEquals('١٢٣٤٥٦٧٨٩٠', $request->get('password'));
        });
    }

    public function testAjaxArabicNumbers()
    {
        $middleware = new TestMiddleware();
        $request_data = [
            'name' => 'Mostafa',
            'age' => '٢٧',
            'cell_number' => '١٢٣٤٥٦',
            'nested_data' => [
                'key1' => '٩٨٧',
                'key2' => '٦٥٤',
                'key3' => 321
            ],
            'password' => '١٢٣٤٥٦٧٨٩٠',
        ];

        $request = new Request($request_data);
        $request->headers->set('Content-Type', 'application/json');

        $middleware->handle($request, function (Request $request) {
            $this->assertEquals('Mostafa', $request->get('name'));
            $this->assertEquals(27, $request->get('age'));
            $this->assertEquals('123456', $request->get('cell_number'));

            $nested_data = $request->get('nested_data');
            $this->assertEquals('987', $nested_data['key1']);
            $this->assertEquals('654', $nested_data['key2']);
            $this->assertEquals('321', $nested_data['key3']);
            $this->assertEquals('١٢٣٤٥٦٧٨٩٠', $request->get('password'));
        });
    }
}
