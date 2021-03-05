<?php


namespace App\Services;

use Cache;
use Kavenegar\Exceptions\ApiException;
use Kavenegar\Exceptions\HttpException;
use Kavenegar\KavenegarApi;


/**
 * @property CodeGenerator code
 */
class OtpService
{
    protected $client;
    protected $receptor;
    protected $message;
    private   $sender;
    protected $channel = 'sms';
    protected $pattern;


    /**
     * OtpService constructor.
     * @param CodeGenerator $codeGenerator
     */
    public function __construct(CodeGenerator  $codeGenerator)
    {
        $config = config('otp');
        $this->client = new KavenegarApi($config['key']);
        $this->setSender($config['sender']);
        $this->setPattern($config['pattern']);
        $this->code = $codeGenerator;
    }

    /**
     * Send OTP
     *
     * @return array
     */
    public function send(): array
    {
        try {
            $token = $this->code->setCacheKey($this->getReceptor())->generate();

            return $this->client->VerifyLookup(
                $this->getReceptor(),
                $token,"","",
                $this->getPattern(),
                $this->getChannel()
            );
        } catch (ApiException | HttpException $e) {
            return $e->errorMessage();
        }

    }

    /**
     *
     * @param $receptor
     * @param $code
     * @return bool
     */
    public function verifyOtp($receptor, $code): bool
    {
        $existCode = $this->code->getCodeByReceptor($receptor);

        if ($existCode == $code) {
            return true;
        }

        return false;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message): void
    {
        $this->message = $message;
    }

    /**
     * @return KavenegarApi
     */
    public function getClient(): KavenegarApi
    {
        return $this->client;
    }

    /**
     * @param KavenegarApi $client
     */
    public function setClient(KavenegarApi $client): void
    {
        $this->client = $client;
    }

    /**
     * @return mixed
     */
    public function getReceptor()
    {
        return $this->receptor;
    }

    /**
     * @param mixed $receptor
     */
    public function setReceptor($receptor): void
    {
        $this->receptor = $receptor;
    }

    /**
     * @return mixed
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param mixed $sender
     */
    public function setSender($sender): void
    {
        $this->sender = $sender;
    }

    /**
     * @return string
     */
    public function getChannel(): string
    {
        return $this->channel;
    }

    /**
     * @param string $channel
     */
    public function setChannel(string $channel): void
    {
        $this->channel = $channel;
    }

    /**
     * @return mixed
     */
    public function getPattern()
    {
        return $this->pattern;
    }

    /**
     * @param mixed $pattern
     */
    public function setPattern($pattern): void
    {
        $this->pattern = $pattern;
    }

}
