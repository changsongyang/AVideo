<?php

require_once dirname(__FILE__) . '/../../../videos/configuration.php';

class Publisher_video_publisher_logs extends ObjectYPT
{

    protected $id, $publish_datetimestamp, $status, $details, $videos_id, $users_id, $publisher_social_medias_id, $timezone;

    static function getSearchFieldsNames()
    {
        return array('details', 'timezone');
    }

    static function getTableName()
    {
        return 'publisher_video_publisher_logs';
    }

    static function getAllVideos()
    {
        global $global;
        $table = "videos";
        $sql = "SELECT * FROM {$table} WHERE 1=1 ";

        $sql .= self::getSqlFromPost();
        $res = sqlDAL::readSql($sql);
        $fullData = sqlDAL::fetchAllAssoc($res);
        sqlDAL::close($res);
        $rows = array();
        if ($res != false) {
            foreach ($fullData as $row) {
                $rows[] = $row;
            }
        } else {
            /**
             * 
             * @var array $global
             * @var object $global['mysqli'] 
             */
            _error_log($sql . ' Error : (' . $global['mysqli']->errno . ') ' . $global['mysqli']->error);
        }
        return $rows;
    }
    static function getAllUsers()
    {
        global $global;
        $table = "users";
        $sql = "SELECT * FROM {$table} WHERE 1=1 ";

        $sql .= self::getSqlFromPost();
        $res = sqlDAL::readSql($sql);
        $fullData = sqlDAL::fetchAllAssoc($res);
        sqlDAL::close($res);
        $rows = array();
        if ($res != false) {
            foreach ($fullData as $row) {
                $rows[] = $row;
            }
        } else {
            /**
             * 
             * @var array $global
             * @var object $global['mysqli'] 
             */
            _error_log($sql . ' Error : (' . $global['mysqli']->errno . ') ' . $global['mysqli']->error);
        }
        return $rows;
    }
    static function getAllPublisher_social_medias()
    {
        global $global;
        $table = "publisher_social_medias";
        $sql = "SELECT * FROM {$table} WHERE 1=1 ";

        $sql .= self::getSqlFromPost();
        $res = sqlDAL::readSql($sql);
        $fullData = sqlDAL::fetchAllAssoc($res);
        sqlDAL::close($res);
        $rows = array();
        if ($res != false) {
            foreach ($fullData as $row) {
                $rows[] = $row;
            }
        } else {
            /**
             * 
             * @var array $global
             * @var object $global['mysqli'] 
             */
            _error_log($sql . ' Error : (' . $global['mysqli']->errno . ') ' . $global['mysqli']->error);
        }
        return $rows;
    }


    function setId($id)
    {
        $this->id = intval($id);
    }

    function setPublish_datetimestamp($publish_datetimestamp)
    {
        $this->publish_datetimestamp = $publish_datetimestamp;
    }

    function setStatus($status)
    {
        $this->status = $status;
    }

    function setDetails($details)
    {
        if(!is_string($details)){
            $details = json_encode($details);
        }
        $this->details = $details;
    }

    function setVideos_id($videos_id)
    {
        $this->videos_id = intval($videos_id);
    }

    function setUsers_id($users_id)
    {
        $this->users_id = intval($users_id);
    }

    function setPublisher_social_medias_id($publisher_social_medias_id)
    {
        $this->publisher_social_medias_id = intval($publisher_social_medias_id);
    }

    function setTimezone($timezone)
    {
        $this->timezone = $timezone;
    }


    function getId()
    {
        return intval($this->id);
    }

    function getPublish_datetimestamp()
    {
        return $this->publish_datetimestamp;
    }

    function getStatus()
    {
        return $this->status;
    }

    function getDetails()
    {
        return $this->details;
    }

    function getVideos_id()
    {
        return intval($this->videos_id);
    }

    function getUsers_id()
    {
        return intval($this->users_id);
    }

    function getPublisher_social_medias_id()
    {
        return intval($this->publisher_social_medias_id);
    }

    function getTimezone()
    {
        return $this->timezone;
    }
}
