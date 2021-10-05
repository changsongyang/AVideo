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

namespace Google\Service\CloudVideoIntelligence;

class GoogleCloudVideointelligenceV1TextFrame extends \Google\Model
{
  protected $rotatedBoundingBoxType = GoogleCloudVideointelligenceV1NormalizedBoundingPoly::class;
  protected $rotatedBoundingBoxDataType = '';
  public $timeOffset;

  /**
   * @param GoogleCloudVideointelligenceV1NormalizedBoundingPoly
   */
  public function setRotatedBoundingBox(GoogleCloudVideointelligenceV1NormalizedBoundingPoly $rotatedBoundingBox)
  {
    $this->rotatedBoundingBox = $rotatedBoundingBox;
  }
  /**
   * @return GoogleCloudVideointelligenceV1NormalizedBoundingPoly
   */
  public function getRotatedBoundingBox()
  {
    return $this->rotatedBoundingBox;
  }
  public function setTimeOffset($timeOffset)
  {
    $this->timeOffset = $timeOffset;
  }
  public function getTimeOffset()
  {
    return $this->timeOffset;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudVideointelligenceV1TextFrame::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1TextFrame');
