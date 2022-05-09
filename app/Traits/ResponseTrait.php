<?php

namespace App\Traits;
use CodeIgniter\API\ResponseTrait as CIResponseTrait;

/**
 * This is rewrite of ResponseTrait from CodeIgniter\API\ResponseTrait
 * @author John <john@xxx.com>
 * 
 * Provides common, more readable, methods to provide
 * consistent HTTP responses under a variety of common
 * situations when working as an API.
 *
 * @property IncomingRequest $request
 * @property Response        $response
 */
trait ResponseTrait
{
    use CIResponseTrait;

   /**
     * Rewrite fail method by John<john@xxx.com>
     * Used for generic failures that no custom methods exist for.
     *
     * @param array|string $errors
     * @param int          $code   HTTP status code
     * @param string|null  $status     Custom, API-specific, error code
     * @param string       $customMessage    Custom error message to override the http default
     *
     * @return Response
     */
    protected function fail($errors, int $code = 400, ?string $status = null, string $customMessage = '')
    {
        $errorMessages = [];

        if (is_string($errors)) {
            $errorMessages = [$errors];
        }

        if (is_object($errors) || is_array($errors)) {
            foreach ($errors as $errorMessage)
            {
                $errorMessages[] = $errorMessage;
            }
        }

        $response = [
            'status'   => $status ?? "ERROR",
            'errors'    => $errorMessages,
            'message' => $customMessage,
        ];

        return $this->respond($response, $code, $customMessage);
    }

    protected function failGeneral($errors, string $customMessage = '', int $code = 400, ?string $status = null){
        return $this->fail($errors, $code, $status, $customMessage);
    }
}
