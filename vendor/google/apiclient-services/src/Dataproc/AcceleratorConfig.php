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

namespace Google\Service\Dataproc;

class AcceleratorConfig extends \Google\Model
{
  public $acceleratorCount;
  public $acceleratorTypeUri;

  public function setAcceleratorCount($acceleratorCount)
  {
    $this->acceleratorCount = $acceleratorCount;
  }
  public function getAcceleratorCount()
  {
    return $this->acceleratorCount;
  }
  public function setAcceleratorTypeUri($acceleratorTypeUri)
  {
    $this->acceleratorTypeUri = $acceleratorTypeUri;
  }
  public function getAcceleratorTypeUri()
  {
    return $this->acceleratorTypeUri;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AcceleratorConfig::class, 'Google_Service_Dataproc_AcceleratorConfig');
