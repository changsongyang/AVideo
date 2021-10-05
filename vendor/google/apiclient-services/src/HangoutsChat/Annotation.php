<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\HangoutsChat;

class Annotation extends \Google\Model
{
  public $length;
  protected $slashCommandType = SlashCommandMetadata::class;
  protected $slashCommandDataType = '';
  public $startIndex;
  public $type;
  protected $userMentionType = UserMentionMetadata::class;
  protected $userMentionDataType = '';

  public function setLength($length)
  {
    $this->length = $length;
  }
  public function getLength()
  {
    return $this->length;
  }
  /**
   * @param SlashCommandMetadata
   */
  public function setSlashCommand(SlashCommandMetadata $slashCommand)
  {
    $this->slashCommand = $slashCommand;
  }
  /**
   * @return SlashCommandMetadata
   */
  public function getSlashCommand()
  {
    return $this->slashCommand;
  }
  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }
  public function getStartIndex()
  {
    return $this->startIndex;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
  /**
   * @param UserMentionMetadata
   */
  public function setUserMention(UserMentionMetadata $userMention)
  {
    $this->userMention = $userMention;
  }
  /**
   * @return UserMentionMetadata
   */
  public function getUserMention()
  {
    return $this->userMention;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Annotation::class, 'Google_Service_HangoutsChat_Annotation');
