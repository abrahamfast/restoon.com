<?php

namespace App\Services;


use Illuminate\Support\Facades\Cache;

class CodeGenerator
{
    protected $code;
    private $start = 1111;
    private $end = 9999;
    protected $cache_key;
    protected $cache_prefix = 'code_generator';


    /**
     * Generate code
     *
     * @return int
     */
    public function generate(): int
    {
        $code = rand($this->getStart(), $this->getEnd());
        // save to cache
        try {
            Cache::put(
                $this->getCachePrefix() . "-" . $this->getCacheKey(),
                $code,
                320
            );

        } catch (\Exception $e) {
        }


        return $code;
    }

    public function getCodeByReceptor($receptor)
    {
        return Cache::get($this->getCachePrefix() . "-" . $receptor);
    }

    /**
     * Get Code
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set Code
     * @param mixed $code
     */
    public function setCode($code): void
    {
        $this->code = $code;
    }

    /**
     * @param int $start
     * @return CodeGenerator
     */
    public function setStart(int $start): CodeGenerator
    {
        $this->start = $start;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCacheKey()
    {
        return $this->cache_key;
    }

    /**
     * @param mixed $cache_key
     * @return CodeGenerator
     */
    public function setCacheKey($cache_key): self
    {
        $this->cache_key = env('OTP_CACHE') . $cache_key;
        return $this;
    }

    /**
     * @return int
     */
    public function getEnd(): int
    {
        return $this->end;
    }

    /**
     * @param int $end
     */
    public function setEnd(int $end): void
    {
        $this->end = $end;
    }

    /**
     * @return int
     */
    public function getStart(): int
    {
        return $this->start;
    }

    /**
     * @return mixed
     */
    public function getCachePrefix(): string
    {
        return $this->cache_prefix;
    }

    /**
     * @param mixed $cache_prefix
     */
    public function setCachePrefix($cache_prefix): void
    {
        $this->cache_prefix = $cache_prefix;
    }

}
