<?php
/**
 * @author      Pierre-Henry Soria <hi@ph7.me>
 * @copyright   (c) 2021, Pierre-Henry Soria
 * @license     MIT License; <https://opensource.org/licenses/MIT>
 */

declare(strict_types=1);

namespace PH7\JustHttp\Test\Unit;

use PH7\JustHttp\StatusCode;
use PHPUnit\Framework\TestCase;

class HttpCodesTest extends TestCase
{
    /**
     * @dataProvider statusCodesProvider
     */
    public function testCorrectStatusCodes(int $expectedCode, int $actualCode): void
    {
        $this->assertSame($expectedCode, $actualCode);
    }

    public function statusCodesProvider(): array
    {
        return [
            // 1xx informational response
            [100, StatusCode::H_CONTINUE],
            [101, StatusCode::SWITCHING_PROTOCOLS],
            [102, StatusCode::PROCESSING],
            [103, StatusCode::EARLY_HINTS],

            // 2xx success
            [200, StatusCode::OK],
            [201, StatusCode::CREATED],
            [202, StatusCode::ACCEPTED],
            [203, StatusCode::NON_AUTHORITATIVE_INFORMATION],
            [204, StatusCode::NO_CONTENT],
            [205, StatusCode::RESET_CONTENT],
            [206, StatusCode::PARTIAL_CONTENT],
            [207, StatusCode::MULTI_STATUS],
            [208, StatusCode::ALREADY_REPORTED],
            [226, StatusCode::IM_USED],

            // 3xx redirection
            [300, StatusCode::MULTIPLE_CHOICES],
            [301, StatusCode::MOVED_PERMANENTLY],
            [302, StatusCode::FOUND],
            [303, StatusCode::SEE_OTHER],
            [304, StatusCode::NOT_MODIFIED],
            [305, StatusCode::USE_PROXY],
            [306, StatusCode::UNUSED],
            [307, StatusCode::TEMPORARY_REDIRECT],

            // 4xx client errors
            [400, StatusCode::BAD_REQUEST],
            [401, StatusCode::UNAUTHORIZED],
            [402, StatusCode::PAYMENT_REQUIRED],
            [403, StatusCode::FORBIDDEN],
            [404, StatusCode::NOT_FOUND],
            [405, StatusCode::METHOD_NOT_ALLOWED],
            [406, StatusCode::NOT_ACCEPTABLE],
            [407, StatusCode::PROXY_AUTHENTICATION_REQUIRED],
            [408, StatusCode::REQUEST_TIMEOUT],
            [409, StatusCode::CONFLICT],
            [410, StatusCode::GONE],
            [411, StatusCode::LENGTH_REQUIRED],
            [412, StatusCode::PRECONDITION_FAILED],
            [413, StatusCode::PAYLOAD_TOO_LARGE],
            [414, StatusCode::URI_TOO_LONG],
            [415, StatusCode::UNSUPPORTED_MEDIA_TYPE],
            [416, StatusCode::REQUESTED_RANGE_NOT_SATISFIABLE],
            [417, StatusCode::EXPECTATION_FAILED],
            [422, StatusCode::UNPROCESSABLE_ENTITY],
            [423, StatusCode::LOCKED],
            [424, StatusCode::FAILED_DEPENDENCY],
            [425, StatusCode::TOO_EARLY],
            [426, StatusCode::UPGRADE_REQUIRED],
            [428, StatusCode::PRECONDITION_REQUIRED],
            [429, StatusCode::TOO_MANY_REQUESTS],
            [431, StatusCode::REQUEST_HEADER_FIELDS_TOO_LARGE],
            [451, StatusCode::UNAVAILABLE_FOR_LEGAL_REASONS],

            // 5xx server errors
            [500, StatusCode::INTERNAL_SERVER_ERROR],
            [501, StatusCode::NOT_IMPLEMENTED],
            [502, StatusCode::BAD_GATEWAY],
            [503, StatusCode::SERVICE_UNAVAILABLE],
            [504, StatusCode::GATEWAY_TIMEOUT],
            [505, StatusCode::VERSION_NOT_SUPPORTED],
            [506, StatusCode::VARIANT_ALSO_NEGOTIATES],
            [507, StatusCode::INSUFFICIENT_STORAGE],
            [508, StatusCode::LOOP_DETECTED],
            [509, StatusCode::BANDWIDTH_LIMIT_EXCEEDED],
            [510, StatusCode::NOT_EXTENDED],
            [511, StatusCode::NETWORK_AUTHENTICATION_REQUIRED]
        ];
    }
}
