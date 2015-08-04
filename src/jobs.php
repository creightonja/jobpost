<?php

  class Jobs {

    private $title;
    private $description;
    private $email;

    function __construct($title, $description, $email) {
      $this->title = $title;
      $this->description = $description;
      $this->email = $email;
    }

    function getTitle()
    {
      return $this->title;
    }


    function setTitle($new_title)
    {
      $this->title = $new_title;
    }


    function getDescription()
    {
      return $this->description;
    }


    function setDescription($new_description)
    {
      $this->description = $new_description;
    }


    function getEmail()
    {
      return $this->email;
    }


    function setEmail($new_email)
    {
      $this->email = $new_email;
    }
  }

  ?>
