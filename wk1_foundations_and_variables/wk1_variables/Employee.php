<?php

class Employee
{
    private string $name;
    private string $job_title;
    private string $degree;
    private string $interests;
    private string $fav_book;
    private string $bio_info;
    private string $homepage_url;
    private string $photo_url;

    public function __construct(string $name, string $job_title, string $degree, string $interests, string $fav_book, string $bio_info, string $homepage_url, string $photo_url)
    {
        $this->name = $name;
        $this->job_title = $job_title;
        $this->degree = $degree;
        $this->interests = $interests;
        $this->fav_book = $fav_book;
        $this->bio_info = $bio_info;
        $this->homepage_url = $homepage_url;
        $this->photo_url = $photo_url;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getJobTitle(): string
    {
        return $this->job_title;
    }

    /**
     * @return string
     */
    public function getDegree(): string
    {
        return $this->degree;
    }

    /**
     * @return string
     */
    public function getInterests(): string
    {
        return $this->interests;
    }

    /**
     * @return string
     */
    public function getFavBook(): string
    {
        return $this->fav_book;
    }

    /**
     * @return string
     */
    public function getBioInfo(): string
    {
        return $this->bio_info;
    }

    /**
     * @return string
     */
    public function getHomepageUrl(): string
    {
        return $this->homepage_url;
    }

    /**
     * @return string
     */
    public function getPhotoUrl(): string
    {
        return $this->photo_url;
    }




}