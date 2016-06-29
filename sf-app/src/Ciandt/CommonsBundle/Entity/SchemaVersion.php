<?php

namespace Ciandt\CommonsBundle\Entity;

/**
 * SchemaVersion
 */
class SchemaVersion
{
    /**
     * @var string
     */
    private $version;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $script;

    /**
     * @var integer
     */
    private $checksum;

    /**
     * @var string
     */
    private $installedBy;

    /**
     * @var \DateTime
     */
    private $installedOn = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     */
    private $executionTime;

    /**
     * @var boolean
     */
    private $success;

    /**
     * @var integer
     */
    private $installedRank;


    /**
     * Set version
     *
     * @param string $version
     *
     * @return SchemaVersion
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return SchemaVersion
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return SchemaVersion
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set script
     *
     * @param string $script
     *
     * @return SchemaVersion
     */
    public function setScript($script)
    {
        $this->script = $script;

        return $this;
    }

    /**
     * Get script
     *
     * @return string
     */
    public function getScript()
    {
        return $this->script;
    }

    /**
     * Set checksum
     *
     * @param integer $checksum
     *
     * @return SchemaVersion
     */
    public function setChecksum($checksum)
    {
        $this->checksum = $checksum;

        return $this;
    }

    /**
     * Get checksum
     *
     * @return integer
     */
    public function getChecksum()
    {
        return $this->checksum;
    }

    /**
     * Set installedBy
     *
     * @param string $installedBy
     *
     * @return SchemaVersion
     */
    public function setInstalledBy($installedBy)
    {
        $this->installedBy = $installedBy;

        return $this;
    }

    /**
     * Get installedBy
     *
     * @return string
     */
    public function getInstalledBy()
    {
        return $this->installedBy;
    }

    /**
     * Set installedOn
     *
     * @param \DateTime $installedOn
     *
     * @return SchemaVersion
     */
    public function setInstalledOn($installedOn)
    {
        $this->installedOn = $installedOn;

        return $this;
    }

    /**
     * Get installedOn
     *
     * @return \DateTime
     */
    public function getInstalledOn()
    {
        return $this->installedOn;
    }

    /**
     * Set executionTime
     *
     * @param integer $executionTime
     *
     * @return SchemaVersion
     */
    public function setExecutionTime($executionTime)
    {
        $this->executionTime = $executionTime;

        return $this;
    }

    /**
     * Get executionTime
     *
     * @return integer
     */
    public function getExecutionTime()
    {
        return $this->executionTime;
    }

    /**
     * Set success
     *
     * @param boolean $success
     *
     * @return SchemaVersion
     */
    public function setSuccess($success)
    {
        $this->success = $success;

        return $this;
    }

    /**
     * Get success
     *
     * @return boolean
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * Get installedRank
     *
     * @return integer
     */
    public function getInstalledRank()
    {
        return $this->installedRank;
    }
}

