<?php
/*
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * Service definition for MapsEngine (v1).
 *
 * <p>
 * The Google Maps Engine API allows developers to store and query geospatial
 * vector and raster data.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/maps-engine/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class GoogleGAL_Service_MapsEngine extends GoogleGAL_Service
{
  /** View and manage your Google My Maps data. */
  const MAPSENGINE =
      "https://www.googleapis.com/auth/mapsengine";
  /** View your Google My Maps data. */
  const MAPSENGINE_READONLY =
      "https://www.googleapis.com/auth/mapsengine.readonly";

  public $assets;
  public $assets_parents;
  public $assets_permissions;
  public $layers;
  public $layers_parents;
  public $layers_permissions;
  public $maps;
  public $maps_permissions;
  public $projects;
  public $projects_icons;
  public $rasterCollections;
  public $rasterCollections_parents;
  public $rasterCollections_permissions;
  public $rasterCollections_rasters;
  public $rasters;
  public $rasters_files;
  public $rasters_parents;
  public $rasters_permissions;
  public $tables;
  public $tables_features;
  public $tables_files;
  public $tables_parents;
  public $tables_permissions;
  

  /**
   * Constructs the internal representation of the MapsEngine service.
   *
   * @param GoogleGAL_Client $client
   */
  public function __construct(GoogleGAL_Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'mapsengine/v1/';
    $this->version = 'v1';
    $this->serviceName = 'mapsengine';

    $this->assets = new GoogleGAL_Service_MapsEngine_Assets_Resource(
        $this,
        $this->serviceName,
        'assets',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'assets/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'assets',
              'httpMethod' => 'GET',
              'parameters' => array(
                'modifiedAfter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'createdAfter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'tags' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'projectId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'search' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'creatorEmail' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'bbox' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'modifiedBefore' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'createdBefore' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'role' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'type' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->assets_parents = new GoogleGAL_Service_MapsEngine_AssetsParents_Resource(
        $this,
        $this->serviceName,
        'parents',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'assets/{id}/parents',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
    $this->assets_permissions = new GoogleGAL_Service_MapsEngine_AssetsPermissions_Resource(
        $this,
        $this->serviceName,
        'permissions',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'assets/{id}/permissions',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->layers = new GoogleGAL_Service_MapsEngine_Layers_Resource(
        $this,
        $this->serviceName,
        'layers',
        array(
          'methods' => array(
            'cancelProcessing' => array(
              'path' => 'layers/{id}/cancelProcessing',
              'httpMethod' => 'POST',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'create' => array(
              'path' => 'layers',
              'httpMethod' => 'POST',
              'parameters' => array(
                'process' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'delete' => array(
              'path' => 'layers/{id}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'layers/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'version' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'getPublished' => array(
              'path' => 'layers/{id}/published',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'layers',
              'httpMethod' => 'GET',
              'parameters' => array(
                'modifiedAfter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'createdAfter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'processingStatus' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'projectId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'tags' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'search' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'creatorEmail' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'bbox' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'modifiedBefore' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'createdBefore' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'role' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'listPublished' => array(
              'path' => 'layers/published',
              'httpMethod' => 'GET',
              'parameters' => array(
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'projectId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'layers/{id}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'process' => array(
              'path' => 'layers/{id}/process',
              'httpMethod' => 'POST',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'publish' => array(
              'path' => 'layers/{id}/publish',
              'httpMethod' => 'POST',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'force' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'unpublish' => array(
              'path' => 'layers/{id}/unpublish',
              'httpMethod' => 'POST',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->layers_parents = new GoogleGAL_Service_MapsEngine_LayersParents_Resource(
        $this,
        $this->serviceName,
        'parents',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'layers/{id}/parents',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
    $this->layers_permissions = new GoogleGAL_Service_MapsEngine_LayersPermissions_Resource(
        $this,
        $this->serviceName,
        'permissions',
        array(
          'methods' => array(
            'batchDelete' => array(
              'path' => 'layers/{id}/permissions/batchDelete',
              'httpMethod' => 'POST',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'batchUpdate' => array(
              'path' => 'layers/{id}/permissions/batchUpdate',
              'httpMethod' => 'POST',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'layers/{id}/permissions',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->maps = new GoogleGAL_Service_MapsEngine_Maps_Resource(
        $this,
        $this->serviceName,
        'maps',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'maps',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'delete' => array(
              'path' => 'maps/{id}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'maps/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'version' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'getPublished' => array(
              'path' => 'maps/{id}/published',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'maps',
              'httpMethod' => 'GET',
              'parameters' => array(
                'modifiedAfter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'createdAfter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'processingStatus' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'projectId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'tags' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'search' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'creatorEmail' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'bbox' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'modifiedBefore' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'createdBefore' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'role' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'listPublished' => array(
              'path' => 'maps/published',
              'httpMethod' => 'GET',
              'parameters' => array(
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'projectId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'maps/{id}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'publish' => array(
              'path' => 'maps/{id}/publish',
              'httpMethod' => 'POST',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'force' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'unpublish' => array(
              'path' => 'maps/{id}/unpublish',
              'httpMethod' => 'POST',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->maps_permissions = new GoogleGAL_Service_MapsEngine_MapsPermissions_Resource(
        $this,
        $this->serviceName,
        'permissions',
        array(
          'methods' => array(
            'batchDelete' => array(
              'path' => 'maps/{id}/permissions/batchDelete',
              'httpMethod' => 'POST',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'batchUpdate' => array(
              'path' => 'maps/{id}/permissions/batchUpdate',
              'httpMethod' => 'POST',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'maps/{id}/permissions',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->projects = new GoogleGAL_Service_MapsEngine_Projects_Resource(
        $this,
        $this->serviceName,
        'projects',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'projects',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->projects_icons = new GoogleGAL_Service_MapsEngine_ProjectsIcons_Resource(
        $this,
        $this->serviceName,
        'icons',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'projects/{projectId}/icons',
              'httpMethod' => 'POST',
              'parameters' => array(
                'projectId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'projects/{projectId}/icons/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'projectId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'projects/{projectId}/icons',
              'httpMethod' => 'GET',
              'parameters' => array(
                'projectId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
    $this->rasterCollections = new GoogleGAL_Service_MapsEngine_RasterCollections_Resource(
        $this,
        $this->serviceName,
        'rasterCollections',
        array(
          'methods' => array(
            'cancelProcessing' => array(
              'path' => 'rasterCollections/{id}/cancelProcessing',
              'httpMethod' => 'POST',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'create' => array(
              'path' => 'rasterCollections',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'delete' => array(
              'path' => 'rasterCollections/{id}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'rasterCollections/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'rasterCollections',
              'httpMethod' => 'GET',
              'parameters' => array(
                'modifiedAfter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'createdAfter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'processingStatus' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'projectId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'tags' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'search' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'creatorEmail' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'bbox' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'modifiedBefore' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'createdBefore' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'role' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'rasterCollections/{id}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'process' => array(
              'path' => 'rasterCollections/{id}/process',
              'httpMethod' => 'POST',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->rasterCollections_parents = new GoogleGAL_Service_MapsEngine_RasterCollectionsParents_Resource(
        $this,
        $this->serviceName,
        'parents',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'rasterCollections/{id}/parents',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
    $this->rasterCollections_permissions = new GoogleGAL_Service_MapsEngine_RasterCollectionsPermissions_Resource(
        $this,
        $this->serviceName,
        'permissions',
        array(
          'methods' => array(
            'batchDelete' => array(
              'path' => 'rasterCollections/{id}/permissions/batchDelete',
              'httpMethod' => 'POST',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'batchUpdate' => array(
              'path' => 'rasterCollections/{id}/permissions/batchUpdate',
              'httpMethod' => 'POST',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'rasterCollections/{id}/permissions',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->rasterCollections_rasters = new GoogleGAL_Service_MapsEngine_RasterCollectionsRasters_Resource(
        $this,
        $this->serviceName,
        'rasters',
        array(
          'methods' => array(
            'batchDelete' => array(
              'path' => 'rasterCollections/{id}/rasters/batchDelete',
              'httpMethod' => 'POST',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'batchInsert' => array(
              'path' => 'rasterCollections/{id}/rasters/batchInsert',
              'httpMethod' => 'POST',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'rasterCollections/{id}/rasters',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'modifiedAfter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'createdAfter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'tags' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'search' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'creatorEmail' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'bbox' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'modifiedBefore' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'createdBefore' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'role' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->rasters = new GoogleGAL_Service_MapsEngine_Rasters_Resource(
        $this,
        $this->serviceName,
        'rasters',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'rasters/{id}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'rasters/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'rasters',
              'httpMethod' => 'GET',
              'parameters' => array(
                'projectId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'modifiedAfter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'createdAfter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'processingStatus' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'tags' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'search' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'creatorEmail' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'bbox' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'modifiedBefore' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'createdBefore' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'role' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'rasters/{id}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'process' => array(
              'path' => 'rasters/{id}/process',
              'httpMethod' => 'POST',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'upload' => array(
              'path' => 'rasters/upload',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->rasters_files = new GoogleGAL_Service_MapsEngine_RastersFiles_Resource(
        $this,
        $this->serviceName,
        'files',
        array(
          'methods' => array(
            'insert' => array(
              'path' => 'rasters/{id}/files',
              'httpMethod' => 'POST',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'filename' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->rasters_parents = new GoogleGAL_Service_MapsEngine_RastersParents_Resource(
        $this,
        $this->serviceName,
        'parents',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'rasters/{id}/parents',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
    $this->rasters_permissions = new GoogleGAL_Service_MapsEngine_RastersPermissions_Resource(
        $this,
        $this->serviceName,
        'permissions',
        array(
          'methods' => array(
            'batchDelete' => array(
              'path' => 'rasters/{id}/permissions/batchDelete',
              'httpMethod' => 'POST',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'batchUpdate' => array(
              'path' => 'rasters/{id}/permissions/batchUpdate',
              'httpMethod' => 'POST',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'rasters/{id}/permissions',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->tables = new GoogleGAL_Service_MapsEngine_Tables_Resource(
        $this,
        $this->serviceName,
        'tables',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'tables',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'delete' => array(
              'path' => 'tables/{id}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'tables/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'version' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'tables',
              'httpMethod' => 'GET',
              'parameters' => array(
                'modifiedAfter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'createdAfter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'processingStatus' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'projectId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'tags' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'search' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'creatorEmail' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'bbox' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'modifiedBefore' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'createdBefore' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'role' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'tables/{id}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'process' => array(
              'path' => 'tables/{id}/process',
              'httpMethod' => 'POST',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'upload' => array(
              'path' => 'tables/upload',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->tables_features = new GoogleGAL_Service_MapsEngine_TablesFeatures_Resource(
        $this,
        $this->serviceName,
        'features',
        array(
          'methods' => array(
            'batchDelete' => array(
              'path' => 'tables/{id}/features/batchDelete',
              'httpMethod' => 'POST',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'batchInsert' => array(
              'path' => 'tables/{id}/features/batchInsert',
              'httpMethod' => 'POST',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'batchPatch' => array(
              'path' => 'tables/{id}/features/batchPatch',
              'httpMethod' => 'POST',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'tables/{tableId}/features/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'version' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'select' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'tables/{id}/features',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'orderBy' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'intersects' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'version' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'limit' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'include' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'where' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'select' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->tables_files = new GoogleGAL_Service_MapsEngine_TablesFiles_Resource(
        $this,
        $this->serviceName,
        'files',
        array(
          'methods' => array(
            'insert' => array(
              'path' => 'tables/{id}/files',
              'httpMethod' => 'POST',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'filename' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->tables_parents = new GoogleGAL_Service_MapsEngine_TablesParents_Resource(
        $this,
        $this->serviceName,
        'parents',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'tables/{id}/parents',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
    $this->tables_permissions = new GoogleGAL_Service_MapsEngine_TablesPermissions_Resource(
        $this,
        $this->serviceName,
        'permissions',
        array(
          'methods' => array(
            'batchDelete' => array(
              'path' => 'tables/{id}/permissions/batchDelete',
              'httpMethod' => 'POST',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'batchUpdate' => array(
              'path' => 'tables/{id}/permissions/batchUpdate',
              'httpMethod' => 'POST',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'tables/{id}/permissions',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
  }
}


/**
 * The "assets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mapsengineService = new GoogleGAL_Service_MapsEngine(...);
 *   $assets = $mapsengineService->assets;
 *  </code>
 */
class GoogleGAL_Service_MapsEngine_Assets_Resource extends GoogleGAL_Service_Resource
{

  /**
   * Return metadata for a particular asset. (assets.get)
   *
   * @param string $id The ID of the asset.
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_Asset
   */
  public function get($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "GoogleGAL_Service_MapsEngine_Asset");
  }

  /**
   * Return all assets readable by the current user. (assets.listAssets)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string modifiedAfter An RFC 3339 formatted date-time value (e.g.
   * 1970-01-01T00:00:00Z). Returned assets will have been modified at or after
   * this time.
   * @opt_param string createdAfter An RFC 3339 formatted date-time value (e.g.
   * 1970-01-01T00:00:00Z). Returned assets will have been created at or after
   * this time.
   * @opt_param string tags A comma separated list of tags. Returned assets will
   * contain all the tags from the list.
   * @opt_param string projectId The ID of a Maps Engine project, used to filter
   * the response. To list all available projects with their IDs, send a Projects:
   * list request. You can also find your project ID as the value of the
   * DashboardPlace:cid URL parameter when signed in to mapsengine.google.com.
   * @opt_param string search An unstructured search string used to filter the set
   * of results based on asset metadata.
   * @opt_param string maxResults The maximum number of items to include in a
   * single response page. The maximum supported value is 100.
   * @opt_param string pageToken The continuation token, used to page through
   * large result sets. To get the next page of results, set this parameter to the
   * value of nextPageToken from the previous response.
   * @opt_param string creatorEmail An email address representing a user. Returned
   * assets that have been created by the user associated with the provided email
   * address.
   * @opt_param string bbox A bounding box, expressed as "west,south,east,north".
   * If set, only assets which intersect this bounding box will be returned.
   * @opt_param string modifiedBefore An RFC 3339 formatted date-time value (e.g.
   * 1970-01-01T00:00:00Z). Returned assets will have been modified at or before
   * this time.
   * @opt_param string createdBefore An RFC 3339 formatted date-time value (e.g.
   * 1970-01-01T00:00:00Z). Returned assets will have been created at or before
   * this time.
   * @opt_param string role The role parameter indicates that the response should
   * only contain assets where the current user has the specified level of access.
   * @opt_param string type A comma separated list of asset types. Returned assets
   * will have one of the types from the provided list. Supported values are
   * 'map', 'layer', 'rasterCollection' and 'table'.
   * @return GoogleGAL_Service_MapsEngine_AssetsListResponse
   */
  public function listAssets($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "GoogleGAL_Service_MapsEngine_AssetsListResponse");
  }
}

/**
 * The "parents" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mapsengineService = new GoogleGAL_Service_MapsEngine(...);
 *   $parents = $mapsengineService->parents;
 *  </code>
 */
class GoogleGAL_Service_MapsEngine_AssetsParents_Resource extends GoogleGAL_Service_Resource
{

  /**
   * Return all parent ids of the specified asset. (parents.listAssetsParents)
   *
   * @param string $id The ID of the asset whose parents will be listed.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken The continuation token, used to page through
   * large result sets. To get the next page of results, set this parameter to the
   * value of nextPageToken from the previous response.
   * @opt_param string maxResults The maximum number of items to include in a
   * single response page. The maximum supported value is 50.
   * @return GoogleGAL_Service_MapsEngine_ParentsListResponse
   */
  public function listAssetsParents($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "GoogleGAL_Service_MapsEngine_ParentsListResponse");
  }
}
/**
 * The "permissions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mapsengineService = new GoogleGAL_Service_MapsEngine(...);
 *   $permissions = $mapsengineService->permissions;
 *  </code>
 */
class GoogleGAL_Service_MapsEngine_AssetsPermissions_Resource extends GoogleGAL_Service_Resource
{

  /**
   * Return all of the permissions for the specified asset.
   * (permissions.listAssetsPermissions)
   *
   * @param string $id The ID of the asset whose permissions will be listed.
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_PermissionsListResponse
   */
  public function listAssetsPermissions($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "GoogleGAL_Service_MapsEngine_PermissionsListResponse");
  }
}

/**
 * The "layers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mapsengineService = new GoogleGAL_Service_MapsEngine(...);
 *   $layers = $mapsengineService->layers;
 *  </code>
 */
class GoogleGAL_Service_MapsEngine_Layers_Resource extends GoogleGAL_Service_Resource
{

  /**
   * Cancel processing on a layer asset. (layers.cancelProcessing)
   *
   * @param string $id The ID of the layer.
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_ProcessResponse
   */
  public function cancelProcessing($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('cancelProcessing', array($params), "GoogleGAL_Service_MapsEngine_ProcessResponse");
  }

  /**
   * Create a layer asset. (layers.create)
   *
   * @param GoogleGAL_Layer $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool process Whether to queue the created layer for processing.
   * @return GoogleGAL_Service_MapsEngine_Layer
   */
  public function create(GoogleGAL_Service_MapsEngine_Layer $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "GoogleGAL_Service_MapsEngine_Layer");
  }

  /**
   * Delete a layer. (layers.delete)
   *
   * @param string $id The ID of the layer. Only the layer creator or project
   * owner are permitted to delete. If the layer is published, or included in a
   * map, the request will fail. Unpublish the layer, and remove it from all maps
   * prior to deleting.
   * @param array $optParams Optional parameters.
   */
  public function delete($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }

  /**
   * Return metadata for a particular layer. (layers.get)
   *
   * @param string $id The ID of the layer.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string version Deprecated: The version parameter indicates which
   * version of the layer should be returned. When version is set to published,
   * the published version of the layer will be returned. Please use the
   * layers.getPublished endpoint instead.
   * @return GoogleGAL_Service_MapsEngine_Layer
   */
  public function get($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "GoogleGAL_Service_MapsEngine_Layer");
  }

  /**
   * Return the published metadata for a particular layer. (layers.getPublished)
   *
   * @param string $id The ID of the layer.
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_PublishedLayer
   */
  public function getPublished($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('getPublished', array($params), "GoogleGAL_Service_MapsEngine_PublishedLayer");
  }

  /**
   * Return all layers readable by the current user. (layers.listLayers)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string modifiedAfter An RFC 3339 formatted date-time value (e.g.
   * 1970-01-01T00:00:00Z). Returned assets will have been modified at or after
   * this time.
   * @opt_param string createdAfter An RFC 3339 formatted date-time value (e.g.
   * 1970-01-01T00:00:00Z). Returned assets will have been created at or after
   * this time.
   * @opt_param string processingStatus
   * @opt_param string projectId The ID of a Maps Engine project, used to filter
   * the response. To list all available projects with their IDs, send a Projects:
   * list request. You can also find your project ID as the value of the
   * DashboardPlace:cid URL parameter when signed in to mapsengine.google.com.
   * @opt_param string tags A comma separated list of tags. Returned assets will
   * contain all the tags from the list.
   * @opt_param string search An unstructured search string used to filter the set
   * of results based on asset metadata.
   * @opt_param string maxResults The maximum number of items to include in a
   * single response page. The maximum supported value is 100.
   * @opt_param string pageToken The continuation token, used to page through
   * large result sets. To get the next page of results, set this parameter to the
   * value of nextPageToken from the previous response.
   * @opt_param string creatorEmail An email address representing a user. Returned
   * assets that have been created by the user associated with the provided email
   * address.
   * @opt_param string bbox A bounding box, expressed as "west,south,east,north".
   * If set, only assets which intersect this bounding box will be returned.
   * @opt_param string modifiedBefore An RFC 3339 formatted date-time value (e.g.
   * 1970-01-01T00:00:00Z). Returned assets will have been modified at or before
   * this time.
   * @opt_param string createdBefore An RFC 3339 formatted date-time value (e.g.
   * 1970-01-01T00:00:00Z). Returned assets will have been created at or before
   * this time.
   * @opt_param string role The role parameter indicates that the response should
   * only contain assets where the current user has the specified level of access.
   * @return GoogleGAL_Service_MapsEngine_LayersListResponse
   */
  public function listLayers($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "GoogleGAL_Service_MapsEngine_LayersListResponse");
  }

  /**
   * Return all published layers readable by the current user.
   * (layers.listPublished)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken The continuation token, used to page through
   * large result sets. To get the next page of results, set this parameter to the
   * value of nextPageToken from the previous response.
   * @opt_param string maxResults The maximum number of items to include in a
   * single response page. The maximum supported value is 100.
   * @opt_param string projectId The ID of a Maps Engine project, used to filter
   * the response. To list all available projects with their IDs, send a Projects:
   * list request. You can also find your project ID as the value of the
   * DashboardPlace:cid URL parameter when signed in to mapsengine.google.com.
   * @return GoogleGAL_Service_MapsEngine_PublishedLayersListResponse
   */
  public function listPublished($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('listPublished', array($params), "GoogleGAL_Service_MapsEngine_PublishedLayersListResponse");
  }

  /**
   * Mutate a layer asset. (layers.patch)
   *
   * @param string $id The ID of the layer.
   * @param GoogleGAL_Layer $postBody
   * @param array $optParams Optional parameters.
   */
  public function patch($id, GoogleGAL_Service_MapsEngine_Layer $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params));
  }

  /**
   * Process a layer asset. (layers.process)
   *
   * @param string $id The ID of the layer.
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_ProcessResponse
   */
  public function process($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('process', array($params), "GoogleGAL_Service_MapsEngine_ProcessResponse");
  }

  /**
   * Publish a layer asset. (layers.publish)
   *
   * @param string $id The ID of the layer.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool force If set to true, the API will allow publication of the
   * layer even if it's out of date. If not true, you'll need to reprocess any
   * out-of-date layer before publishing.
   * @return GoogleGAL_Service_MapsEngine_PublishResponse
   */
  public function publish($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('publish', array($params), "GoogleGAL_Service_MapsEngine_PublishResponse");
  }

  /**
   * Unpublish a layer asset. (layers.unpublish)
   *
   * @param string $id The ID of the layer.
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_PublishResponse
   */
  public function unpublish($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('unpublish', array($params), "GoogleGAL_Service_MapsEngine_PublishResponse");
  }
}

/**
 * The "parents" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mapsengineService = new GoogleGAL_Service_MapsEngine(...);
 *   $parents = $mapsengineService->parents;
 *  </code>
 */
class GoogleGAL_Service_MapsEngine_LayersParents_Resource extends GoogleGAL_Service_Resource
{

  /**
   * Return all parent ids of the specified layer. (parents.listLayersParents)
   *
   * @param string $id The ID of the layer whose parents will be listed.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken The continuation token, used to page through
   * large result sets. To get the next page of results, set this parameter to the
   * value of nextPageToken from the previous response.
   * @opt_param string maxResults The maximum number of items to include in a
   * single response page. The maximum supported value is 50.
   * @return GoogleGAL_Service_MapsEngine_ParentsListResponse
   */
  public function listLayersParents($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "GoogleGAL_Service_MapsEngine_ParentsListResponse");
  }
}
/**
 * The "permissions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mapsengineService = new GoogleGAL_Service_MapsEngine(...);
 *   $permissions = $mapsengineService->permissions;
 *  </code>
 */
class GoogleGAL_Service_MapsEngine_LayersPermissions_Resource extends GoogleGAL_Service_Resource
{

  /**
   * Remove permission entries from an already existing asset.
   * (permissions.batchDelete)
   *
   * @param string $id The ID of the asset from which permissions will be removed.
   * @param GoogleGAL_PermissionsBatchDeleteRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_PermissionsBatchDeleteResponse
   */
  public function batchDelete($id, GoogleGAL_Service_MapsEngine_PermissionsBatchDeleteRequest $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchDelete', array($params), "GoogleGAL_Service_MapsEngine_PermissionsBatchDeleteResponse");
  }

  /**
   * Add or update permission entries to an already existing asset.
   *
   * An asset can hold up to 20 different permission entries. Each batchInsert
   * request is atomic. (permissions.batchUpdate)
   *
   * @param string $id The ID of the asset to which permissions will be added.
   * @param GoogleGAL_PermissionsBatchUpdateRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_PermissionsBatchUpdateResponse
   */
  public function batchUpdate($id, GoogleGAL_Service_MapsEngine_PermissionsBatchUpdateRequest $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchUpdate', array($params), "GoogleGAL_Service_MapsEngine_PermissionsBatchUpdateResponse");
  }

  /**
   * Return all of the permissions for the specified asset.
   * (permissions.listLayersPermissions)
   *
   * @param string $id The ID of the asset whose permissions will be listed.
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_PermissionsListResponse
   */
  public function listLayersPermissions($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "GoogleGAL_Service_MapsEngine_PermissionsListResponse");
  }
}

/**
 * The "maps" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mapsengineService = new GoogleGAL_Service_MapsEngine(...);
 *   $maps = $mapsengineService->maps;
 *  </code>
 */
class GoogleGAL_Service_MapsEngine_Maps_Resource extends GoogleGAL_Service_Resource
{

  /**
   * Create a map asset. (maps.create)
   *
   * @param GoogleGAL_Map $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_Map
   */
  public function create(GoogleGAL_Service_MapsEngine_Map $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "GoogleGAL_Service_MapsEngine_Map");
  }

  /**
   * Delete a map. (maps.delete)
   *
   * @param string $id The ID of the map. Only the map creator or project owner
   * are permitted to delete. If the map is published the request will fail.
   * Unpublish the map prior to deleting.
   * @param array $optParams Optional parameters.
   */
  public function delete($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }

  /**
   * Return metadata for a particular map. (maps.get)
   *
   * @param string $id The ID of the map.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string version Deprecated: The version parameter indicates which
   * version of the map should be returned. When version is set to published, the
   * published version of the map will be returned. Please use the
   * maps.getPublished endpoint instead.
   * @return GoogleGAL_Service_MapsEngine_Map
   */
  public function get($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "GoogleGAL_Service_MapsEngine_Map");
  }

  /**
   * Return the published metadata for a particular map. (maps.getPublished)
   *
   * @param string $id The ID of the map.
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_PublishedMap
   */
  public function getPublished($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('getPublished', array($params), "GoogleGAL_Service_MapsEngine_PublishedMap");
  }

  /**
   * Return all maps readable by the current user. (maps.listMaps)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string modifiedAfter An RFC 3339 formatted date-time value (e.g.
   * 1970-01-01T00:00:00Z). Returned assets will have been modified at or after
   * this time.
   * @opt_param string createdAfter An RFC 3339 formatted date-time value (e.g.
   * 1970-01-01T00:00:00Z). Returned assets will have been created at or after
   * this time.
   * @opt_param string processingStatus
   * @opt_param string projectId The ID of a Maps Engine project, used to filter
   * the response. To list all available projects with their IDs, send a Projects:
   * list request. You can also find your project ID as the value of the
   * DashboardPlace:cid URL parameter when signed in to mapsengine.google.com.
   * @opt_param string tags A comma separated list of tags. Returned assets will
   * contain all the tags from the list.
   * @opt_param string search An unstructured search string used to filter the set
   * of results based on asset metadata.
   * @opt_param string maxResults The maximum number of items to include in a
   * single response page. The maximum supported value is 100.
   * @opt_param string pageToken The continuation token, used to page through
   * large result sets. To get the next page of results, set this parameter to the
   * value of nextPageToken from the previous response.
   * @opt_param string creatorEmail An email address representing a user. Returned
   * assets that have been created by the user associated with the provided email
   * address.
   * @opt_param string bbox A bounding box, expressed as "west,south,east,north".
   * If set, only assets which intersect this bounding box will be returned.
   * @opt_param string modifiedBefore An RFC 3339 formatted date-time value (e.g.
   * 1970-01-01T00:00:00Z). Returned assets will have been modified at or before
   * this time.
   * @opt_param string createdBefore An RFC 3339 formatted date-time value (e.g.
   * 1970-01-01T00:00:00Z). Returned assets will have been created at or before
   * this time.
   * @opt_param string role The role parameter indicates that the response should
   * only contain assets where the current user has the specified level of access.
   * @return GoogleGAL_Service_MapsEngine_MapsListResponse
   */
  public function listMaps($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "GoogleGAL_Service_MapsEngine_MapsListResponse");
  }

  /**
   * Return all published maps readable by the current user. (maps.listPublished)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken The continuation token, used to page through
   * large result sets. To get the next page of results, set this parameter to the
   * value of nextPageToken from the previous response.
   * @opt_param string maxResults The maximum number of items to include in a
   * single response page. The maximum supported value is 100.
   * @opt_param string projectId The ID of a Maps Engine project, used to filter
   * the response. To list all available projects with their IDs, send a Projects:
   * list request. You can also find your project ID as the value of the
   * DashboardPlace:cid URL parameter when signed in to mapsengine.google.com.
   * @return GoogleGAL_Service_MapsEngine_PublishedMapsListResponse
   */
  public function listPublished($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('listPublished', array($params), "GoogleGAL_Service_MapsEngine_PublishedMapsListResponse");
  }

  /**
   * Mutate a map asset. (maps.patch)
   *
   * @param string $id The ID of the map.
   * @param GoogleGAL_Map $postBody
   * @param array $optParams Optional parameters.
   */
  public function patch($id, GoogleGAL_Service_MapsEngine_Map $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params));
  }

  /**
   * Publish a map asset. (maps.publish)
   *
   * @param string $id The ID of the map.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool force If set to true, the API will allow publication of the
   * map even if it's out of date. If false, the map must have a processingStatus
   * of complete before publishing.
   * @return GoogleGAL_Service_MapsEngine_PublishResponse
   */
  public function publish($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('publish', array($params), "GoogleGAL_Service_MapsEngine_PublishResponse");
  }

  /**
   * Unpublish a map asset. (maps.unpublish)
   *
   * @param string $id The ID of the map.
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_PublishResponse
   */
  public function unpublish($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('unpublish', array($params), "GoogleGAL_Service_MapsEngine_PublishResponse");
  }
}

/**
 * The "permissions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mapsengineService = new GoogleGAL_Service_MapsEngine(...);
 *   $permissions = $mapsengineService->permissions;
 *  </code>
 */
class GoogleGAL_Service_MapsEngine_MapsPermissions_Resource extends GoogleGAL_Service_Resource
{

  /**
   * Remove permission entries from an already existing asset.
   * (permissions.batchDelete)
   *
   * @param string $id The ID of the asset from which permissions will be removed.
   * @param GoogleGAL_PermissionsBatchDeleteRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_PermissionsBatchDeleteResponse
   */
  public function batchDelete($id, GoogleGAL_Service_MapsEngine_PermissionsBatchDeleteRequest $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchDelete', array($params), "GoogleGAL_Service_MapsEngine_PermissionsBatchDeleteResponse");
  }

  /**
   * Add or update permission entries to an already existing asset.
   *
   * An asset can hold up to 20 different permission entries. Each batchInsert
   * request is atomic. (permissions.batchUpdate)
   *
   * @param string $id The ID of the asset to which permissions will be added.
   * @param GoogleGAL_PermissionsBatchUpdateRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_PermissionsBatchUpdateResponse
   */
  public function batchUpdate($id, GoogleGAL_Service_MapsEngine_PermissionsBatchUpdateRequest $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchUpdate', array($params), "GoogleGAL_Service_MapsEngine_PermissionsBatchUpdateResponse");
  }

  /**
   * Return all of the permissions for the specified asset.
   * (permissions.listMapsPermissions)
   *
   * @param string $id The ID of the asset whose permissions will be listed.
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_PermissionsListResponse
   */
  public function listMapsPermissions($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "GoogleGAL_Service_MapsEngine_PermissionsListResponse");
  }
}

/**
 * The "projects" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mapsengineService = new GoogleGAL_Service_MapsEngine(...);
 *   $projects = $mapsengineService->projects;
 *  </code>
 */
class GoogleGAL_Service_MapsEngine_Projects_Resource extends GoogleGAL_Service_Resource
{

  /**
   * Return all projects readable by the current user. (projects.listProjects)
   *
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_ProjectsListResponse
   */
  public function listProjects($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "GoogleGAL_Service_MapsEngine_ProjectsListResponse");
  }
}

/**
 * The "icons" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mapsengineService = new GoogleGAL_Service_MapsEngine(...);
 *   $icons = $mapsengineService->icons;
 *  </code>
 */
class GoogleGAL_Service_MapsEngine_ProjectsIcons_Resource extends GoogleGAL_Service_Resource
{

  /**
   * Create an icon. (icons.create)
   *
   * @param string $projectId The ID of the project.
   * @param GoogleGAL_Icon $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_Icon
   */
  public function create($projectId, GoogleGAL_Service_MapsEngine_Icon $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "GoogleGAL_Service_MapsEngine_Icon");
  }

  /**
   * Return an icon or its associated metadata (icons.get)
   *
   * @param string $projectId The ID of the project.
   * @param string $id The ID of the icon.
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_Icon
   */
  public function get($projectId, $id, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "GoogleGAL_Service_MapsEngine_Icon");
  }

  /**
   * Return all icons in the current project (icons.listProjectsIcons)
   *
   * @param string $projectId The ID of the project.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken The continuation token, used to page through
   * large result sets. To get the next page of results, set this parameter to the
   * value of nextPageToken from the previous response.
   * @opt_param string maxResults The maximum number of items to include in a
   * single response page. The maximum supported value is 50.
   * @return GoogleGAL_Service_MapsEngine_IconsListResponse
   */
  public function listProjectsIcons($projectId, $optParams = array())
  {
    $params = array('projectId' => $projectId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "GoogleGAL_Service_MapsEngine_IconsListResponse");
  }
}

/**
 * The "rasterCollections" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mapsengineService = new GoogleGAL_Service_MapsEngine(...);
 *   $rasterCollections = $mapsengineService->rasterCollections;
 *  </code>
 */
class GoogleGAL_Service_MapsEngine_RasterCollections_Resource extends GoogleGAL_Service_Resource
{

  /**
   * Cancel processing on a raster collection asset.
   * (rasterCollections.cancelProcessing)
   *
   * @param string $id The ID of the raster collection.
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_ProcessResponse
   */
  public function cancelProcessing($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('cancelProcessing', array($params), "GoogleGAL_Service_MapsEngine_ProcessResponse");
  }

  /**
   * Create a raster collection asset. (rasterCollections.create)
   *
   * @param GoogleGAL_RasterCollection $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_RasterCollection
   */
  public function create(GoogleGAL_Service_MapsEngine_RasterCollection $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "GoogleGAL_Service_MapsEngine_RasterCollection");
  }

  /**
   * Delete a raster collection. (rasterCollections.delete)
   *
   * @param string $id The ID of the raster collection. Only the raster collection
   * creator or project owner are permitted to delete. If the rastor collection is
   * included in a layer, the request will fail. Remove the raster collection from
   * all layers prior to deleting.
   * @param array $optParams Optional parameters.
   */
  public function delete($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }

  /**
   * Return metadata for a particular raster collection. (rasterCollections.get)
   *
   * @param string $id The ID of the raster collection.
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_RasterCollection
   */
  public function get($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "GoogleGAL_Service_MapsEngine_RasterCollection");
  }

  /**
   * Return all raster collections readable by the current user.
   * (rasterCollections.listRasterCollections)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string modifiedAfter An RFC 3339 formatted date-time value (e.g.
   * 1970-01-01T00:00:00Z). Returned assets will have been modified at or after
   * this time.
   * @opt_param string createdAfter An RFC 3339 formatted date-time value (e.g.
   * 1970-01-01T00:00:00Z). Returned assets will have been created at or after
   * this time.
   * @opt_param string processingStatus
   * @opt_param string projectId The ID of a Maps Engine project, used to filter
   * the response. To list all available projects with their IDs, send a Projects:
   * list request. You can also find your project ID as the value of the
   * DashboardPlace:cid URL parameter when signed in to mapsengine.google.com.
   * @opt_param string tags A comma separated list of tags. Returned assets will
   * contain all the tags from the list.
   * @opt_param string search An unstructured search string used to filter the set
   * of results based on asset metadata.
   * @opt_param string maxResults The maximum number of items to include in a
   * single response page. The maximum supported value is 100.
   * @opt_param string pageToken The continuation token, used to page through
   * large result sets. To get the next page of results, set this parameter to the
   * value of nextPageToken from the previous response.
   * @opt_param string creatorEmail An email address representing a user. Returned
   * assets that have been created by the user associated with the provided email
   * address.
   * @opt_param string bbox A bounding box, expressed as "west,south,east,north".
   * If set, only assets which intersect this bounding box will be returned.
   * @opt_param string modifiedBefore An RFC 3339 formatted date-time value (e.g.
   * 1970-01-01T00:00:00Z). Returned assets will have been modified at or before
   * this time.
   * @opt_param string createdBefore An RFC 3339 formatted date-time value (e.g.
   * 1970-01-01T00:00:00Z). Returned assets will have been created at or before
   * this time.
   * @opt_param string role The role parameter indicates that the response should
   * only contain assets where the current user has the specified level of access.
   * @return GoogleGAL_Service_MapsEngine_RasterCollectionsListResponse
   */
  public function listRasterCollections($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "GoogleGAL_Service_MapsEngine_RasterCollectionsListResponse");
  }

  /**
   * Mutate a raster collection asset. (rasterCollections.patch)
   *
   * @param string $id The ID of the raster collection.
   * @param GoogleGAL_RasterCollection $postBody
   * @param array $optParams Optional parameters.
   */
  public function patch($id, GoogleGAL_Service_MapsEngine_RasterCollection $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params));
  }

  /**
   * Process a raster collection asset. (rasterCollections.process)
   *
   * @param string $id The ID of the raster collection.
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_ProcessResponse
   */
  public function process($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('process', array($params), "GoogleGAL_Service_MapsEngine_ProcessResponse");
  }
}

/**
 * The "parents" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mapsengineService = new GoogleGAL_Service_MapsEngine(...);
 *   $parents = $mapsengineService->parents;
 *  </code>
 */
class GoogleGAL_Service_MapsEngine_RasterCollectionsParents_Resource extends GoogleGAL_Service_Resource
{

  /**
   * Return all parent ids of the specified raster collection.
   * (parents.listRasterCollectionsParents)
   *
   * @param string $id The ID of the raster collection whose parents will be
   * listed.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken The continuation token, used to page through
   * large result sets. To get the next page of results, set this parameter to the
   * value of nextPageToken from the previous response.
   * @opt_param string maxResults The maximum number of items to include in a
   * single response page. The maximum supported value is 50.
   * @return GoogleGAL_Service_MapsEngine_ParentsListResponse
   */
  public function listRasterCollectionsParents($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "GoogleGAL_Service_MapsEngine_ParentsListResponse");
  }
}
/**
 * The "permissions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mapsengineService = new GoogleGAL_Service_MapsEngine(...);
 *   $permissions = $mapsengineService->permissions;
 *  </code>
 */
class GoogleGAL_Service_MapsEngine_RasterCollectionsPermissions_Resource extends GoogleGAL_Service_Resource
{

  /**
   * Remove permission entries from an already existing asset.
   * (permissions.batchDelete)
   *
   * @param string $id The ID of the asset from which permissions will be removed.
   * @param GoogleGAL_PermissionsBatchDeleteRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_PermissionsBatchDeleteResponse
   */
  public function batchDelete($id, GoogleGAL_Service_MapsEngine_PermissionsBatchDeleteRequest $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchDelete', array($params), "GoogleGAL_Service_MapsEngine_PermissionsBatchDeleteResponse");
  }

  /**
   * Add or update permission entries to an already existing asset.
   *
   * An asset can hold up to 20 different permission entries. Each batchInsert
   * request is atomic. (permissions.batchUpdate)
   *
   * @param string $id The ID of the asset to which permissions will be added.
   * @param GoogleGAL_PermissionsBatchUpdateRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_PermissionsBatchUpdateResponse
   */
  public function batchUpdate($id, GoogleGAL_Service_MapsEngine_PermissionsBatchUpdateRequest $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchUpdate', array($params), "GoogleGAL_Service_MapsEngine_PermissionsBatchUpdateResponse");
  }

  /**
   * Return all of the permissions for the specified asset.
   * (permissions.listRasterCollectionsPermissions)
   *
   * @param string $id The ID of the asset whose permissions will be listed.
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_PermissionsListResponse
   */
  public function listRasterCollectionsPermissions($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "GoogleGAL_Service_MapsEngine_PermissionsListResponse");
  }
}
/**
 * The "rasters" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mapsengineService = new GoogleGAL_Service_MapsEngine(...);
 *   $rasters = $mapsengineService->rasters;
 *  </code>
 */
class GoogleGAL_Service_MapsEngine_RasterCollectionsRasters_Resource extends GoogleGAL_Service_Resource
{

  /**
   * Remove rasters from an existing raster collection.
   *
   * Up to 50 rasters can be included in a single batchDelete request. Each
   * batchDelete request is atomic. (rasters.batchDelete)
   *
   * @param string $id The ID of the raster collection to which these rasters
   * belong.
   * @param GoogleGAL_RasterCollectionsRasterBatchDeleteRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_RasterCollectionsRastersBatchDeleteResponse
   */
  public function batchDelete($id, GoogleGAL_Service_MapsEngine_RasterCollectionsRasterBatchDeleteRequest $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchDelete', array($params), "GoogleGAL_Service_MapsEngine_RasterCollectionsRastersBatchDeleteResponse");
  }

  /**
   * Add rasters to an existing raster collection. Rasters must be successfully
   * processed in order to be added to a raster collection.
   *
   * Up to 50 rasters can be included in a single batchInsert request. Each
   * batchInsert request is atomic. (rasters.batchInsert)
   *
   * @param string $id The ID of the raster collection to which these rasters
   * belong.
   * @param GoogleGAL_RasterCollectionsRastersBatchInsertRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_RasterCollectionsRastersBatchInsertResponse
   */
  public function batchInsert($id, GoogleGAL_Service_MapsEngine_RasterCollectionsRastersBatchInsertRequest $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchInsert', array($params), "GoogleGAL_Service_MapsEngine_RasterCollectionsRastersBatchInsertResponse");
  }

  /**
   * Return all rasters within a raster collection.
   * (rasters.listRasterCollectionsRasters)
   *
   * @param string $id The ID of the raster collection to which these rasters
   * belong.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string modifiedAfter An RFC 3339 formatted date-time value (e.g.
   * 1970-01-01T00:00:00Z). Returned assets will have been modified at or after
   * this time.
   * @opt_param string createdAfter An RFC 3339 formatted date-time value (e.g.
   * 1970-01-01T00:00:00Z). Returned assets will have been created at or after
   * this time.
   * @opt_param string tags A comma separated list of tags. Returned assets will
   * contain all the tags from the list.
   * @opt_param string search An unstructured search string used to filter the set
   * of results based on asset metadata.
   * @opt_param string maxResults The maximum number of items to include in a
   * single response page. The maximum supported value is 100.
   * @opt_param string pageToken The continuation token, used to page through
   * large result sets. To get the next page of results, set this parameter to the
   * value of nextPageToken from the previous response.
   * @opt_param string creatorEmail An email address representing a user. Returned
   * assets that have been created by the user associated with the provided email
   * address.
   * @opt_param string bbox A bounding box, expressed as "west,south,east,north".
   * If set, only assets which intersect this bounding box will be returned.
   * @opt_param string modifiedBefore An RFC 3339 formatted date-time value (e.g.
   * 1970-01-01T00:00:00Z). Returned assets will have been modified at or before
   * this time.
   * @opt_param string createdBefore An RFC 3339 formatted date-time value (e.g.
   * 1970-01-01T00:00:00Z). Returned assets will have been created at or before
   * this time.
   * @opt_param string role The role parameter indicates that the response should
   * only contain assets where the current user has the specified level of access.
   * @return GoogleGAL_Service_MapsEngine_RasterCollectionsRastersListResponse
   */
  public function listRasterCollectionsRasters($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "GoogleGAL_Service_MapsEngine_RasterCollectionsRastersListResponse");
  }
}

/**
 * The "rasters" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mapsengineService = new GoogleGAL_Service_MapsEngine(...);
 *   $rasters = $mapsengineService->rasters;
 *  </code>
 */
class GoogleGAL_Service_MapsEngine_Rasters_Resource extends GoogleGAL_Service_Resource
{

  /**
   * Delete a raster. (rasters.delete)
   *
   * @param string $id The ID of the raster. Only the raster creator or project
   * owner are permitted to delete. If the raster is included in a layer or
   * mosaic, the request will fail. Remove it from all parents prior to deleting.
   * @param array $optParams Optional parameters.
   */
  public function delete($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }

  /**
   * Return metadata for a single raster. (rasters.get)
   *
   * @param string $id The ID of the raster.
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_Raster
   */
  public function get($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "GoogleGAL_Service_MapsEngine_Raster");
  }

  /**
   * Return all rasters readable by the current user. (rasters.listRasters)
   *
   * @param string $projectId The ID of a Maps Engine project, used to filter the
   * response. To list all available projects with their IDs, send a Projects:
   * list request. You can also find your project ID as the value of the
   * DashboardPlace:cid URL parameter when signed in to mapsengine.google.com.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string modifiedAfter An RFC 3339 formatted date-time value (e.g.
   * 1970-01-01T00:00:00Z). Returned assets will have been modified at or after
   * this time.
   * @opt_param string createdAfter An RFC 3339 formatted date-time value (e.g.
   * 1970-01-01T00:00:00Z). Returned assets will have been created at or after
   * this time.
   * @opt_param string processingStatus
   * @opt_param string tags A comma separated list of tags. Returned assets will
   * contain all the tags from the list.
   * @opt_param string search An unstructured search string used to filter the set
   * of results based on asset metadata.
   * @opt_param string maxResults The maximum number of items to include in a
   * single response page. The maximum supported value is 100.
   * @opt_param string pageToken The continuation token, used to page through
   * large result sets. To get the next page of results, set this parameter to the
   * value of nextPageToken from the previous response.
   * @opt_param string creatorEmail An email address representing a user. Returned
   * assets that have been created by the user associated with the provided email
   * address.
   * @opt_param string bbox A bounding box, expressed as "west,south,east,north".
   * If set, only assets which intersect this bounding box will be returned.
   * @opt_param string modifiedBefore An RFC 3339 formatted date-time value (e.g.
   * 1970-01-01T00:00:00Z). Returned assets will have been modified at or before
   * this time.
   * @opt_param string createdBefore An RFC 3339 formatted date-time value (e.g.
   * 1970-01-01T00:00:00Z). Returned assets will have been created at or before
   * this time.
   * @opt_param string role The role parameter indicates that the response should
   * only contain assets where the current user has the specified level of access.
   * @return GoogleGAL_Service_MapsEngine_RastersListResponse
   */
  public function listRasters($projectId, $optParams = array())
  {
    $params = array('projectId' => $projectId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "GoogleGAL_Service_MapsEngine_RastersListResponse");
  }

  /**
   * Mutate a raster asset. (rasters.patch)
   *
   * @param string $id The ID of the raster.
   * @param GoogleGAL_Raster $postBody
   * @param array $optParams Optional parameters.
   */
  public function patch($id, GoogleGAL_Service_MapsEngine_Raster $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params));
  }

  /**
   * Process a raster asset. (rasters.process)
   *
   * @param string $id The ID of the raster.
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_ProcessResponse
   */
  public function process($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('process', array($params), "GoogleGAL_Service_MapsEngine_ProcessResponse");
  }

  /**
   * Create a skeleton raster asset for upload. (rasters.upload)
   *
   * @param GoogleGAL_Raster $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_Raster
   */
  public function upload(GoogleGAL_Service_MapsEngine_Raster $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('upload', array($params), "GoogleGAL_Service_MapsEngine_Raster");
  }
}

/**
 * The "files" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mapsengineService = new GoogleGAL_Service_MapsEngine(...);
 *   $files = $mapsengineService->files;
 *  </code>
 */
class GoogleGAL_Service_MapsEngine_RastersFiles_Resource extends GoogleGAL_Service_Resource
{

  /**
   * Upload a file to a raster asset. (files.insert)
   *
   * @param string $id The ID of the raster asset.
   * @param string $filename The file name of this uploaded file.
   * @param array $optParams Optional parameters.
   */
  public function insert($id, $filename, $optParams = array())
  {
    $params = array('id' => $id, 'filename' => $filename);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params));
  }
}
/**
 * The "parents" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mapsengineService = new GoogleGAL_Service_MapsEngine(...);
 *   $parents = $mapsengineService->parents;
 *  </code>
 */
class GoogleGAL_Service_MapsEngine_RastersParents_Resource extends GoogleGAL_Service_Resource
{

  /**
   * Return all parent ids of the specified rasters. (parents.listRastersParents)
   *
   * @param string $id The ID of the rasters whose parents will be listed.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken The continuation token, used to page through
   * large result sets. To get the next page of results, set this parameter to the
   * value of nextPageToken from the previous response.
   * @opt_param string maxResults The maximum number of items to include in a
   * single response page. The maximum supported value is 50.
   * @return GoogleGAL_Service_MapsEngine_ParentsListResponse
   */
  public function listRastersParents($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "GoogleGAL_Service_MapsEngine_ParentsListResponse");
  }
}
/**
 * The "permissions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mapsengineService = new GoogleGAL_Service_MapsEngine(...);
 *   $permissions = $mapsengineService->permissions;
 *  </code>
 */
class GoogleGAL_Service_MapsEngine_RastersPermissions_Resource extends GoogleGAL_Service_Resource
{

  /**
   * Remove permission entries from an already existing asset.
   * (permissions.batchDelete)
   *
   * @param string $id The ID of the asset from which permissions will be removed.
   * @param GoogleGAL_PermissionsBatchDeleteRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_PermissionsBatchDeleteResponse
   */
  public function batchDelete($id, GoogleGAL_Service_MapsEngine_PermissionsBatchDeleteRequest $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchDelete', array($params), "GoogleGAL_Service_MapsEngine_PermissionsBatchDeleteResponse");
  }

  /**
   * Add or update permission entries to an already existing asset.
   *
   * An asset can hold up to 20 different permission entries. Each batchInsert
   * request is atomic. (permissions.batchUpdate)
   *
   * @param string $id The ID of the asset to which permissions will be added.
   * @param GoogleGAL_PermissionsBatchUpdateRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_PermissionsBatchUpdateResponse
   */
  public function batchUpdate($id, GoogleGAL_Service_MapsEngine_PermissionsBatchUpdateRequest $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchUpdate', array($params), "GoogleGAL_Service_MapsEngine_PermissionsBatchUpdateResponse");
  }

  /**
   * Return all of the permissions for the specified asset.
   * (permissions.listRastersPermissions)
   *
   * @param string $id The ID of the asset whose permissions will be listed.
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_PermissionsListResponse
   */
  public function listRastersPermissions($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "GoogleGAL_Service_MapsEngine_PermissionsListResponse");
  }
}

/**
 * The "tables" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mapsengineService = new GoogleGAL_Service_MapsEngine(...);
 *   $tables = $mapsengineService->tables;
 *  </code>
 */
class GoogleGAL_Service_MapsEngine_Tables_Resource extends GoogleGAL_Service_Resource
{

  /**
   * Create a table asset. (tables.create)
   *
   * @param GoogleGAL_Table $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_Table
   */
  public function create(GoogleGAL_Service_MapsEngine_Table $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "GoogleGAL_Service_MapsEngine_Table");
  }

  /**
   * Delete a table. (tables.delete)
   *
   * @param string $id The ID of the table. Only the table creator or project
   * owner are permitted to delete. If the table is included in a layer, the
   * request will fail. Remove it from all layers prior to deleting.
   * @param array $optParams Optional parameters.
   */
  public function delete($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }

  /**
   * Return metadata for a particular table, including the schema. (tables.get)
   *
   * @param string $id The ID of the table.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string version
   * @return GoogleGAL_Service_MapsEngine_Table
   */
  public function get($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "GoogleGAL_Service_MapsEngine_Table");
  }

  /**
   * Return all tables readable by the current user. (tables.listTables)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string modifiedAfter An RFC 3339 formatted date-time value (e.g.
   * 1970-01-01T00:00:00Z). Returned assets will have been modified at or after
   * this time.
   * @opt_param string createdAfter An RFC 3339 formatted date-time value (e.g.
   * 1970-01-01T00:00:00Z). Returned assets will have been created at or after
   * this time.
   * @opt_param string processingStatus
   * @opt_param string projectId The ID of a Maps Engine project, used to filter
   * the response. To list all available projects with their IDs, send a Projects:
   * list request. You can also find your project ID as the value of the
   * DashboardPlace:cid URL parameter when signed in to mapsengine.google.com.
   * @opt_param string tags A comma separated list of tags. Returned assets will
   * contain all the tags from the list.
   * @opt_param string search An unstructured search string used to filter the set
   * of results based on asset metadata.
   * @opt_param string maxResults The maximum number of items to include in a
   * single response page. The maximum supported value is 100.
   * @opt_param string pageToken The continuation token, used to page through
   * large result sets. To get the next page of results, set this parameter to the
   * value of nextPageToken from the previous response.
   * @opt_param string creatorEmail An email address representing a user. Returned
   * assets that have been created by the user associated with the provided email
   * address.
   * @opt_param string bbox A bounding box, expressed as "west,south,east,north".
   * If set, only assets which intersect this bounding box will be returned.
   * @opt_param string modifiedBefore An RFC 3339 formatted date-time value (e.g.
   * 1970-01-01T00:00:00Z). Returned assets will have been modified at or before
   * this time.
   * @opt_param string createdBefore An RFC 3339 formatted date-time value (e.g.
   * 1970-01-01T00:00:00Z). Returned assets will have been created at or before
   * this time.
   * @opt_param string role The role parameter indicates that the response should
   * only contain assets where the current user has the specified level of access.
   * @return GoogleGAL_Service_MapsEngine_TablesListResponse
   */
  public function listTables($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "GoogleGAL_Service_MapsEngine_TablesListResponse");
  }

  /**
   * Mutate a table asset. (tables.patch)
   *
   * @param string $id The ID of the table.
   * @param GoogleGAL_Table $postBody
   * @param array $optParams Optional parameters.
   */
  public function patch($id, GoogleGAL_Service_MapsEngine_Table $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params));
  }

  /**
   * Process a table asset. (tables.process)
   *
   * @param string $id The ID of the table.
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_ProcessResponse
   */
  public function process($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('process', array($params), "GoogleGAL_Service_MapsEngine_ProcessResponse");
  }

  /**
   * Create a placeholder table asset to which table files can be uploaded. Once
   * the placeholder has been created, files are uploaded to the
   * https://www.googleapis.com/upload/mapsengine/v1/tables/table_id/files
   * endpoint. See Table Upload in the Developer's Guide or Table.files: insert in
   * the reference documentation for more information. (tables.upload)
   *
   * @param GoogleGAL_Table $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_Table
   */
  public function upload(GoogleGAL_Service_MapsEngine_Table $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('upload', array($params), "GoogleGAL_Service_MapsEngine_Table");
  }
}

/**
 * The "features" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mapsengineService = new GoogleGAL_Service_MapsEngine(...);
 *   $features = $mapsengineService->features;
 *  </code>
 */
class GoogleGAL_Service_MapsEngine_TablesFeatures_Resource extends GoogleGAL_Service_Resource
{

  /**
   * Delete all features matching the given IDs. (features.batchDelete)
   *
   * @param string $id The ID of the table that contains the features to be
   * deleted.
   * @param GoogleGAL_FeaturesBatchDeleteRequest $postBody
   * @param array $optParams Optional parameters.
   */
  public function batchDelete($id, GoogleGAL_Service_MapsEngine_FeaturesBatchDeleteRequest $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchDelete', array($params));
  }

  /**
   * Append features to an existing table.
   *
   * A single batchInsert request can create:
   *
   * - Up to 50 features. - A combined total of 10 000 vertices. Feature limits
   * are documented in the Supported data formats and limits article of the Google
   * Maps Engine help center. Note that free and paid accounts have different
   * limits.
   *
   * For more information about inserting features, read Creating features in the
   * Google Maps Engine developer's guide. (features.batchInsert)
   *
   * @param string $id The ID of the table to append the features to.
   * @param GoogleGAL_FeaturesBatchInsertRequest $postBody
   * @param array $optParams Optional parameters.
   */
  public function batchInsert($id, GoogleGAL_Service_MapsEngine_FeaturesBatchInsertRequest $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchInsert', array($params));
  }

  /**
   * Update the supplied features.
   *
   * A single batchPatch request can update:
   *
   * - Up to 50 features. - A combined total of 10 000 vertices. Feature limits
   * are documented in the Supported data formats and limits article of the Google
   * Maps Engine help center. Note that free and paid accounts have different
   * limits.
   *
   * Feature updates use HTTP PATCH semantics:
   *
   * - A supplied value replaces an existing value (if any) in that field. -
   * Omitted fields remain unchanged. - Complex values in geometries and
   * properties must be replaced as atomic units. For example, providing just the
   * coordinates of a geometry is not allowed; the complete geometry, including
   * type, must be supplied. - Setting a property's value to null deletes that
   * property. For more information about updating features, read Updating
   * features in the Google Maps Engine developer's guide. (features.batchPatch)
   *
   * @param string $id The ID of the table containing the features to be patched.
   * @param GoogleGAL_FeaturesBatchPatchRequest $postBody
   * @param array $optParams Optional parameters.
   */
  public function batchPatch($id, GoogleGAL_Service_MapsEngine_FeaturesBatchPatchRequest $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchPatch', array($params));
  }

  /**
   * Return a single feature, given its ID. (features.get)
   *
   * @param string $tableId The ID of the table.
   * @param string $id The ID of the feature to get.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string version The table version to access. See Accessing Public
   * Data for information.
   * @opt_param string select A SQL-like projection clause used to specify
   * returned properties. If this parameter is not included, all properties are
   * returned.
   * @return GoogleGAL_Service_MapsEngine_Feature
   */
  public function get($tableId, $id, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "GoogleGAL_Service_MapsEngine_Feature");
  }

  /**
   * Return all features readable by the current user.
   * (features.listTablesFeatures)
   *
   * @param string $id The ID of the table to which these features belong.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string orderBy An SQL-like order by clause used to sort results.
   * If this parameter is not included, the order of features is undefined.
   * @opt_param string intersects A geometry literal that specifies the spatial
   * restriction of the query.
   * @opt_param string maxResults The maximum number of items to include in the
   * response, used for paging. The maximum supported value is 1000.
   * @opt_param string pageToken The continuation token, used to page through
   * large result sets. To get the next page of results, set this parameter to the
   * value of nextPageToken from the previous response.
   * @opt_param string version The table version to access. See Accessing Public
   * Data for information.
   * @opt_param string limit The total number of features to return from the
   * query, irrespective of the number of pages.
   * @opt_param string include A comma separated list of optional data to include.
   * Optional data available: schema.
   * @opt_param string where An SQL-like predicate used to filter results.
   * @opt_param string select A SQL-like projection clause used to specify
   * returned properties. If this parameter is not included, all properties are
   * returned.
   * @return GoogleGAL_Service_MapsEngine_FeaturesListResponse
   */
  public function listTablesFeatures($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "GoogleGAL_Service_MapsEngine_FeaturesListResponse");
  }
}
/**
 * The "files" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mapsengineService = new GoogleGAL_Service_MapsEngine(...);
 *   $files = $mapsengineService->files;
 *  </code>
 */
class GoogleGAL_Service_MapsEngine_TablesFiles_Resource extends GoogleGAL_Service_Resource
{

  /**
   * Upload a file to a placeholder table asset. See Table Upload in the
   * Developer's Guide for more information. Supported file types are listed in
   * the Supported data formats and limits article of the Google Maps Engine help
   * center. (files.insert)
   *
   * @param string $id The ID of the table asset.
   * @param string $filename The file name of this uploaded file.
   * @param array $optParams Optional parameters.
   */
  public function insert($id, $filename, $optParams = array())
  {
    $params = array('id' => $id, 'filename' => $filename);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params));
  }
}
/**
 * The "parents" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mapsengineService = new GoogleGAL_Service_MapsEngine(...);
 *   $parents = $mapsengineService->parents;
 *  </code>
 */
class GoogleGAL_Service_MapsEngine_TablesParents_Resource extends GoogleGAL_Service_Resource
{

  /**
   * Return all parent ids of the specified table. (parents.listTablesParents)
   *
   * @param string $id The ID of the table whose parents will be listed.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken The continuation token, used to page through
   * large result sets. To get the next page of results, set this parameter to the
   * value of nextPageToken from the previous response.
   * @opt_param string maxResults The maximum number of items to include in a
   * single response page. The maximum supported value is 50.
   * @return GoogleGAL_Service_MapsEngine_ParentsListResponse
   */
  public function listTablesParents($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "GoogleGAL_Service_MapsEngine_ParentsListResponse");
  }
}
/**
 * The "permissions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mapsengineService = new GoogleGAL_Service_MapsEngine(...);
 *   $permissions = $mapsengineService->permissions;
 *  </code>
 */
class GoogleGAL_Service_MapsEngine_TablesPermissions_Resource extends GoogleGAL_Service_Resource
{

  /**
   * Remove permission entries from an already existing asset.
   * (permissions.batchDelete)
   *
   * @param string $id The ID of the asset from which permissions will be removed.
   * @param GoogleGAL_PermissionsBatchDeleteRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_PermissionsBatchDeleteResponse
   */
  public function batchDelete($id, GoogleGAL_Service_MapsEngine_PermissionsBatchDeleteRequest $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchDelete', array($params), "GoogleGAL_Service_MapsEngine_PermissionsBatchDeleteResponse");
  }

  /**
   * Add or update permission entries to an already existing asset.
   *
   * An asset can hold up to 20 different permission entries. Each batchInsert
   * request is atomic. (permissions.batchUpdate)
   *
   * @param string $id The ID of the asset to which permissions will be added.
   * @param GoogleGAL_PermissionsBatchUpdateRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_PermissionsBatchUpdateResponse
   */
  public function batchUpdate($id, GoogleGAL_Service_MapsEngine_PermissionsBatchUpdateRequest $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchUpdate', array($params), "GoogleGAL_Service_MapsEngine_PermissionsBatchUpdateResponse");
  }

  /**
   * Return all of the permissions for the specified asset.
   * (permissions.listTablesPermissions)
   *
   * @param string $id The ID of the asset whose permissions will be listed.
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_MapsEngine_PermissionsListResponse
   */
  public function listTablesPermissions($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "GoogleGAL_Service_MapsEngine_PermissionsListResponse");
  }
}




class GoogleGAL_Service_MapsEngine_AcquisitionTime extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $end;
  public $precision;
  public $start;


  public function setEnd($end)
  {
    $this->end = $end;
  }
  public function getEnd()
  {
    return $this->end;
  }
  public function setPrecision($precision)
  {
    $this->precision = $precision;
  }
  public function getPrecision()
  {
    return $this->precision;
  }
  public function setStart($start)
  {
    $this->start = $start;
  }
  public function getStart()
  {
    return $this->start;
  }
}

class GoogleGAL_Service_MapsEngine_Asset extends GoogleGAL_Collection
{
  protected $collection_key = 'tags';
  protected $internal_gapi_mappings = array(
  );
  public $bbox;
  public $creationTime;
  public $creatorEmail;
  public $description;
  public $etag;
  public $id;
  public $lastModifiedTime;
  public $lastModifierEmail;
  public $name;
  public $projectId;
  public $resource;
  public $tags;
  public $type;
  public $writersCanEditPermissions;


  public function setBbox($bbox)
  {
    $this->bbox = $bbox;
  }
  public function getBbox()
  {
    return $this->bbox;
  }
  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }
  public function getCreationTime()
  {
    return $this->creationTime;
  }
  public function setCreatorEmail($creatorEmail)
  {
    $this->creatorEmail = $creatorEmail;
  }
  public function getCreatorEmail()
  {
    return $this->creatorEmail;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  public function getEtag()
  {
    return $this->etag;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setLastModifiedTime($lastModifiedTime)
  {
    $this->lastModifiedTime = $lastModifiedTime;
  }
  public function getLastModifiedTime()
  {
    return $this->lastModifiedTime;
  }
  public function setLastModifierEmail($lastModifierEmail)
  {
    $this->lastModifierEmail = $lastModifierEmail;
  }
  public function getLastModifierEmail()
  {
    return $this->lastModifierEmail;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  public function getProjectId()
  {
    return $this->projectId;
  }
  public function setResource($resource)
  {
    $this->resource = $resource;
  }
  public function getResource()
  {
    return $this->resource;
  }
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  public function getTags()
  {
    return $this->tags;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
  public function setWritersCanEditPermissions($writersCanEditPermissions)
  {
    $this->writersCanEditPermissions = $writersCanEditPermissions;
  }
  public function getWritersCanEditPermissions()
  {
    return $this->writersCanEditPermissions;
  }
}

class GoogleGAL_Service_MapsEngine_AssetsListResponse extends GoogleGAL_Collection
{
  protected $collection_key = 'assets';
  protected $internal_gapi_mappings = array(
  );
  protected $assetsType = 'GoogleGAL_Service_MapsEngine_Asset';
  protected $assetsDataType = 'array';
  public $nextPageToken;


  public function setAssets($assets)
  {
    $this->assets = $assets;
  }
  public function getAssets()
  {
    return $this->assets;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class GoogleGAL_Service_MapsEngine_Border extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $color;
  public $opacity;
  public $width;


  public function setColor($color)
  {
    $this->color = $color;
  }
  public function getColor()
  {
    return $this->color;
  }
  public function setOpacity($opacity)
  {
    $this->opacity = $opacity;
  }
  public function getOpacity()
  {
    return $this->opacity;
  }
  public function setWidth($width)
  {
    $this->width = $width;
  }
  public function getWidth()
  {
    return $this->width;
  }
}

class GoogleGAL_Service_MapsEngine_Color extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $color;
  public $opacity;


  public function setColor($color)
  {
    $this->color = $color;
  }
  public function getColor()
  {
    return $this->color;
  }
  public function setOpacity($opacity)
  {
    $this->opacity = $opacity;
  }
  public function getOpacity()
  {
    return $this->opacity;
  }
}

class GoogleGAL_Service_MapsEngine_Datasource extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $id;


  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
}

class GoogleGAL_Service_MapsEngine_DisplayRule extends GoogleGAL_Collection
{
  protected $collection_key = 'filters';
  protected $internal_gapi_mappings = array(
  );
  protected $filtersType = 'GoogleGAL_Service_MapsEngine_Filter';
  protected $filtersDataType = 'array';
  protected $lineOptionsType = 'GoogleGAL_Service_MapsEngine_LineStyle';
  protected $lineOptionsDataType = '';
  public $name;
  protected $pointOptionsType = 'GoogleGAL_Service_MapsEngine_PointStyle';
  protected $pointOptionsDataType = '';
  protected $polygonOptionsType = 'GoogleGAL_Service_MapsEngine_PolygonStyle';
  protected $polygonOptionsDataType = '';
  protected $zoomLevelsType = 'GoogleGAL_Service_MapsEngine_ZoomLevels';
  protected $zoomLevelsDataType = '';


  public function setFilters($filters)
  {
    $this->filters = $filters;
  }
  public function getFilters()
  {
    return $this->filters;
  }
  public function setLineOptions(GoogleGAL_Service_MapsEngine_LineStyle $lineOptions)
  {
    $this->lineOptions = $lineOptions;
  }
  public function getLineOptions()
  {
    return $this->lineOptions;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setPointOptions(GoogleGAL_Service_MapsEngine_PointStyle $pointOptions)
  {
    $this->pointOptions = $pointOptions;
  }
  public function getPointOptions()
  {
    return $this->pointOptions;
  }
  public function setPolygonOptions(GoogleGAL_Service_MapsEngine_PolygonStyle $polygonOptions)
  {
    $this->polygonOptions = $polygonOptions;
  }
  public function getPolygonOptions()
  {
    return $this->polygonOptions;
  }
  public function setZoomLevels(GoogleGAL_Service_MapsEngine_ZoomLevels $zoomLevels)
  {
    $this->zoomLevels = $zoomLevels;
  }
  public function getZoomLevels()
  {
    return $this->zoomLevels;
  }
}

class GoogleGAL_Service_MapsEngine_Feature extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $geometryType = 'GoogleGAL_Service_MapsEngine_GeoJsonGeometry';
  protected $geometryDataType = '';
  public $properties;
  public $type;


  public function setGeometry(GoogleGAL_Service_MapsEngine_GeoJsonGeometry $geometry)
  {
    $this->geometry = $geometry;
  }
  public function getGeometry()
  {
    return $this->geometry;
  }
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  public function getProperties()
  {
    return $this->properties;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
}

class GoogleGAL_Service_MapsEngine_FeatureInfo extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $content;


  public function setContent($content)
  {
    $this->content = $content;
  }
  public function getContent()
  {
    return $this->content;
  }
}

class GoogleGAL_Service_MapsEngine_FeaturesBatchDeleteRequest extends GoogleGAL_Collection
{
  protected $collection_key = 'primaryKeys';
  protected $internal_gapi_mappings = array(
        "gxIds" => "gx_ids",
  );
  public $gxIds;
  public $primaryKeys;


  public function setGxIds($gxIds)
  {
    $this->gxIds = $gxIds;
  }
  public function getGxIds()
  {
    return $this->gxIds;
  }
  public function setPrimaryKeys($primaryKeys)
  {
    $this->primaryKeys = $primaryKeys;
  }
  public function getPrimaryKeys()
  {
    return $this->primaryKeys;
  }
}

class GoogleGAL_Service_MapsEngine_FeaturesBatchInsertRequest extends GoogleGAL_Collection
{
  protected $collection_key = 'features';
  protected $internal_gapi_mappings = array(
  );
  protected $featuresType = 'GoogleGAL_Service_MapsEngine_Feature';
  protected $featuresDataType = 'array';
  public $normalizeGeometries;


  public function setFeatures($features)
  {
    $this->features = $features;
  }
  public function getFeatures()
  {
    return $this->features;
  }
  public function setNormalizeGeometries($normalizeGeometries)
  {
    $this->normalizeGeometries = $normalizeGeometries;
  }
  public function getNormalizeGeometries()
  {
    return $this->normalizeGeometries;
  }
}

class GoogleGAL_Service_MapsEngine_FeaturesBatchPatchRequest extends GoogleGAL_Collection
{
  protected $collection_key = 'features';
  protected $internal_gapi_mappings = array(
  );
  protected $featuresType = 'GoogleGAL_Service_MapsEngine_Feature';
  protected $featuresDataType = 'array';
  public $normalizeGeometries;


  public function setFeatures($features)
  {
    $this->features = $features;
  }
  public function getFeatures()
  {
    return $this->features;
  }
  public function setNormalizeGeometries($normalizeGeometries)
  {
    $this->normalizeGeometries = $normalizeGeometries;
  }
  public function getNormalizeGeometries()
  {
    return $this->normalizeGeometries;
  }
}

class GoogleGAL_Service_MapsEngine_FeaturesListResponse extends GoogleGAL_Collection
{
  protected $collection_key = 'features';
  protected $internal_gapi_mappings = array(
  );
  public $allowedQueriesPerSecond;
  protected $featuresType = 'GoogleGAL_Service_MapsEngine_Feature';
  protected $featuresDataType = 'array';
  public $nextPageToken;
  protected $schemaType = 'GoogleGAL_Service_MapsEngine_Schema';
  protected $schemaDataType = '';
  public $type;


  public function setAllowedQueriesPerSecond($allowedQueriesPerSecond)
  {
    $this->allowedQueriesPerSecond = $allowedQueriesPerSecond;
  }
  public function getAllowedQueriesPerSecond()
  {
    return $this->allowedQueriesPerSecond;
  }
  public function setFeatures($features)
  {
    $this->features = $features;
  }
  public function getFeatures()
  {
    return $this->features;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setSchema(GoogleGAL_Service_MapsEngine_Schema $schema)
  {
    $this->schema = $schema;
  }
  public function getSchema()
  {
    return $this->schema;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
}

class GoogleGAL_Service_MapsEngine_Filter extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $column;
  public $operator;
  public $value;


  public function setColumn($column)
  {
    $this->column = $column;
  }
  public function getColumn()
  {
    return $this->column;
  }
  public function setOperator($operator)
  {
    $this->operator = $operator;
  }
  public function getOperator()
  {
    return $this->operator;
  }
  public function setValue($value)
  {
    $this->value = $value;
  }
  public function getValue()
  {
    return $this->value;
  }
}

class GoogleGAL_Service_MapsEngine_GeoJsonGeometry extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $type;


  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
}

class GoogleGAL_Service_MapsEngine_GeoJsonGeometryCollection extends GoogleGAL_Service_MapsEngine_GeoJsonGeometry
{
  protected $collection_key = 'geometries';
  protected $internal_gapi_mappings = array(
  );
  protected $geometriesType = 'GoogleGAL_Service_MapsEngine_GeoJsonGeometry';
  protected $geometriesDataType = 'array';
  protected function gapiInit()
  {
    $this->type = 'GeometryCollection';
  }

  public function setGeometries($geometries)
  {
    $this->geometries = $geometries;
  }
  public function getGeometries()
  {
    return $this->geometries;
  }
}

class GoogleGAL_Service_MapsEngine_GeoJsonLineString extends GoogleGAL_Service_MapsEngine_GeoJsonGeometry
{
  protected $collection_key = 'coordinates';
  protected $internal_gapi_mappings = array(
  );
  public $coordinates;
  protected function gapiInit()
  {
    $this->type = 'LineString';
  }

  public function setCoordinates($coordinates)
  {
    $this->coordinates = $coordinates;
  }
  public function getCoordinates()
  {
    return $this->coordinates;
  }
}

class GoogleGAL_Service_MapsEngine_GeoJsonMultiLineString extends GoogleGAL_Service_MapsEngine_GeoJsonGeometry
{
  protected $collection_key = 'coordinates';
  protected $internal_gapi_mappings = array(
  );
  public $coordinates;
  protected function gapiInit()
  {
    $this->type = 'MultiLineString';
  }

  public function setCoordinates($coordinates)
  {
    $this->coordinates = $coordinates;
  }
  public function getCoordinates()
  {
    return $this->coordinates;
  }
}

class GoogleGAL_Service_MapsEngine_GeoJsonMultiPoint extends GoogleGAL_Service_MapsEngine_GeoJsonGeometry
{
  protected $collection_key = 'coordinates';
  protected $internal_gapi_mappings = array(
  );
  public $coordinates;
  protected function gapiInit()
  {
    $this->type = 'MultiPoint';
  }

  public function setCoordinates($coordinates)
  {
    $this->coordinates = $coordinates;
  }
  public function getCoordinates()
  {
    return $this->coordinates;
  }
}

class GoogleGAL_Service_MapsEngine_GeoJsonMultiPolygon extends GoogleGAL_Service_MapsEngine_GeoJsonGeometry
{
  protected $collection_key = 'coordinates';
  protected $internal_gapi_mappings = array(
  );
  public $coordinates;
  protected function gapiInit()
  {
    $this->type = 'MultiPolygon';
  }

  public function setCoordinates($coordinates)
  {
    $this->coordinates = $coordinates;
  }
  public function getCoordinates()
  {
    return $this->coordinates;
  }
}

class GoogleGAL_Service_MapsEngine_GeoJsonPoint extends GoogleGAL_Service_MapsEngine_GeoJsonGeometry
{
  protected $collection_key = 'coordinates';
  protected $internal_gapi_mappings = array(
  );
  public $coordinates;
  protected function gapiInit()
  {
    $this->type = 'Point';
  }

  public function setCoordinates($coordinates)
  {
    $this->coordinates = $coordinates;
  }
  public function getCoordinates()
  {
    return $this->coordinates;
  }
}

class GoogleGAL_Service_MapsEngine_GeoJsonPolygon extends GoogleGAL_Service_MapsEngine_GeoJsonGeometry
{
  protected $collection_key = 'coordinates';
  protected $internal_gapi_mappings = array(
  );
  public $coordinates;
  protected function gapiInit()
  {
    $this->type = 'Polygon';
  }

  public function setCoordinates($coordinates)
  {
    $this->coordinates = $coordinates;
  }
  public function getCoordinates()
  {
    return $this->coordinates;
  }
}

class GoogleGAL_Service_MapsEngine_GeoJsonProperties extends GoogleGAL_Model
{
}

class GoogleGAL_Service_MapsEngine_Icon extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $description;
  public $id;
  public $name;


  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
}

class GoogleGAL_Service_MapsEngine_IconStyle extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $id;
  public $name;
  protected $scaledShapeType = 'GoogleGAL_Service_MapsEngine_ScaledShape';
  protected $scaledShapeDataType = '';
  protected $scalingFunctionType = 'GoogleGAL_Service_MapsEngine_ScalingFunction';
  protected $scalingFunctionDataType = '';


  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setScaledShape(GoogleGAL_Service_MapsEngine_ScaledShape $scaledShape)
  {
    $this->scaledShape = $scaledShape;
  }
  public function getScaledShape()
  {
    return $this->scaledShape;
  }
  public function setScalingFunction(GoogleGAL_Service_MapsEngine_ScalingFunction $scalingFunction)
  {
    $this->scalingFunction = $scalingFunction;
  }
  public function getScalingFunction()
  {
    return $this->scalingFunction;
  }
}

class GoogleGAL_Service_MapsEngine_IconsListResponse extends GoogleGAL_Collection
{
  protected $collection_key = 'icons';
  protected $internal_gapi_mappings = array(
  );
  protected $iconsType = 'GoogleGAL_Service_MapsEngine_Icon';
  protected $iconsDataType = 'array';
  public $nextPageToken;


  public function setIcons($icons)
  {
    $this->icons = $icons;
  }
  public function getIcons()
  {
    return $this->icons;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class GoogleGAL_Service_MapsEngine_LabelStyle extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $color;
  public $column;
  public $fontStyle;
  public $fontWeight;
  public $opacity;
  protected $outlineType = 'GoogleGAL_Service_MapsEngine_Color';
  protected $outlineDataType = '';
  public $size;


  public function setColor($color)
  {
    $this->color = $color;
  }
  public function getColor()
  {
    return $this->color;
  }
  public function setColumn($column)
  {
    $this->column = $column;
  }
  public function getColumn()
  {
    return $this->column;
  }
  public function setFontStyle($fontStyle)
  {
    $this->fontStyle = $fontStyle;
  }
  public function getFontStyle()
  {
    return $this->fontStyle;
  }
  public function setFontWeight($fontWeight)
  {
    $this->fontWeight = $fontWeight;
  }
  public function getFontWeight()
  {
    return $this->fontWeight;
  }
  public function setOpacity($opacity)
  {
    $this->opacity = $opacity;
  }
  public function getOpacity()
  {
    return $this->opacity;
  }
  public function setOutline(GoogleGAL_Service_MapsEngine_Color $outline)
  {
    $this->outline = $outline;
  }
  public function getOutline()
  {
    return $this->outline;
  }
  public function setSize($size)
  {
    $this->size = $size;
  }
  public function getSize()
  {
    return $this->size;
  }
}

class GoogleGAL_Service_MapsEngine_Layer extends GoogleGAL_Collection
{
  protected $collection_key = 'tags';
  protected $internal_gapi_mappings = array(
  );
  public $bbox;
  public $creationTime;
  public $creatorEmail;
  public $datasourceType;
  protected $datasourcesType = 'GoogleGAL_Service_MapsEngine_Datasource';
  protected $datasourcesDataType = 'array';
  public $description;
  public $draftAccessList;
  public $etag;
  public $id;
  public $lastModifiedTime;
  public $lastModifierEmail;
  public $layerType;
  public $name;
  public $processingStatus;
  public $projectId;
  public $publishedAccessList;
  public $publishingStatus;
  protected $styleType = 'GoogleGAL_Service_MapsEngine_VectorStyle';
  protected $styleDataType = '';
  public $tags;
  public $writersCanEditPermissions;


  public function setBbox($bbox)
  {
    $this->bbox = $bbox;
  }
  public function getBbox()
  {
    return $this->bbox;
  }
  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }
  public function getCreationTime()
  {
    return $this->creationTime;
  }
  public function setCreatorEmail($creatorEmail)
  {
    $this->creatorEmail = $creatorEmail;
  }
  public function getCreatorEmail()
  {
    return $this->creatorEmail;
  }
  public function setDatasourceType($datasourceType)
  {
    $this->datasourceType = $datasourceType;
  }
  public function getDatasourceType()
  {
    return $this->datasourceType;
  }
  public function setDatasources(GoogleGAL_Service_MapsEngine_Datasource $datasources)
  {
    $this->datasources = $datasources;
  }
  public function getDatasources()
  {
    return $this->datasources;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setDraftAccessList($draftAccessList)
  {
    $this->draftAccessList = $draftAccessList;
  }
  public function getDraftAccessList()
  {
    return $this->draftAccessList;
  }
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  public function getEtag()
  {
    return $this->etag;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setLastModifiedTime($lastModifiedTime)
  {
    $this->lastModifiedTime = $lastModifiedTime;
  }
  public function getLastModifiedTime()
  {
    return $this->lastModifiedTime;
  }
  public function setLastModifierEmail($lastModifierEmail)
  {
    $this->lastModifierEmail = $lastModifierEmail;
  }
  public function getLastModifierEmail()
  {
    return $this->lastModifierEmail;
  }
  public function setLayerType($layerType)
  {
    $this->layerType = $layerType;
  }
  public function getLayerType()
  {
    return $this->layerType;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setProcessingStatus($processingStatus)
  {
    $this->processingStatus = $processingStatus;
  }
  public function getProcessingStatus()
  {
    return $this->processingStatus;
  }
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  public function getProjectId()
  {
    return $this->projectId;
  }
  public function setPublishedAccessList($publishedAccessList)
  {
    $this->publishedAccessList = $publishedAccessList;
  }
  public function getPublishedAccessList()
  {
    return $this->publishedAccessList;
  }
  public function setPublishingStatus($publishingStatus)
  {
    $this->publishingStatus = $publishingStatus;
  }
  public function getPublishingStatus()
  {
    return $this->publishingStatus;
  }
  public function setStyle(GoogleGAL_Service_MapsEngine_VectorStyle $style)
  {
    $this->style = $style;
  }
  public function getStyle()
  {
    return $this->style;
  }
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  public function getTags()
  {
    return $this->tags;
  }
  public function setWritersCanEditPermissions($writersCanEditPermissions)
  {
    $this->writersCanEditPermissions = $writersCanEditPermissions;
  }
  public function getWritersCanEditPermissions()
  {
    return $this->writersCanEditPermissions;
  }
}

class GoogleGAL_Service_MapsEngine_LayersListResponse extends GoogleGAL_Collection
{
  protected $collection_key = 'layers';
  protected $internal_gapi_mappings = array(
  );
  protected $layersType = 'GoogleGAL_Service_MapsEngine_Layer';
  protected $layersDataType = 'array';
  public $nextPageToken;


  public function setLayers($layers)
  {
    $this->layers = $layers;
  }
  public function getLayers()
  {
    return $this->layers;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class GoogleGAL_Service_MapsEngine_LineStyle extends GoogleGAL_Collection
{
  protected $collection_key = 'dash';
  protected $internal_gapi_mappings = array(
  );
  protected $borderType = 'GoogleGAL_Service_MapsEngine_Border';
  protected $borderDataType = '';
  public $dash;
  protected $labelType = 'GoogleGAL_Service_MapsEngine_LabelStyle';
  protected $labelDataType = '';
  protected $strokeType = 'GoogleGAL_Service_MapsEngine_LineStyleStroke';
  protected $strokeDataType = '';


  public function setBorder(GoogleGAL_Service_MapsEngine_Border $border)
  {
    $this->border = $border;
  }
  public function getBorder()
  {
    return $this->border;
  }
  public function setDash($dash)
  {
    $this->dash = $dash;
  }
  public function getDash()
  {
    return $this->dash;
  }
  public function setLabel(GoogleGAL_Service_MapsEngine_LabelStyle $label)
  {
    $this->label = $label;
  }
  public function getLabel()
  {
    return $this->label;
  }
  public function setStroke(GoogleGAL_Service_MapsEngine_LineStyleStroke $stroke)
  {
    $this->stroke = $stroke;
  }
  public function getStroke()
  {
    return $this->stroke;
  }
}

class GoogleGAL_Service_MapsEngine_LineStyleStroke extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $color;
  public $opacity;
  public $width;


  public function setColor($color)
  {
    $this->color = $color;
  }
  public function getColor()
  {
    return $this->color;
  }
  public function setOpacity($opacity)
  {
    $this->opacity = $opacity;
  }
  public function getOpacity()
  {
    return $this->opacity;
  }
  public function setWidth($width)
  {
    $this->width = $width;
  }
  public function getWidth()
  {
    return $this->width;
  }
}

class GoogleGAL_Service_MapsEngine_Map extends GoogleGAL_Collection
{
  protected $collection_key = 'versions';
  protected $internal_gapi_mappings = array(
  );
  public $bbox;
  protected $contentsType = 'GoogleGAL_Service_MapsEngine_MapItem';
  protected $contentsDataType = '';
  public $creationTime;
  public $creatorEmail;
  public $defaultViewport;
  public $description;
  public $draftAccessList;
  public $etag;
  public $id;
  public $lastModifiedTime;
  public $lastModifierEmail;
  public $name;
  public $processingStatus;
  public $projectId;
  public $publishedAccessList;
  public $publishingStatus;
  public $tags;
  public $versions;
  public $writersCanEditPermissions;


  public function setBbox($bbox)
  {
    $this->bbox = $bbox;
  }
  public function getBbox()
  {
    return $this->bbox;
  }
  public function setContents(GoogleGAL_Service_MapsEngine_MapItem $contents)
  {
    $this->contents = $contents;
  }
  public function getContents()
  {
    return $this->contents;
  }
  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }
  public function getCreationTime()
  {
    return $this->creationTime;
  }
  public function setCreatorEmail($creatorEmail)
  {
    $this->creatorEmail = $creatorEmail;
  }
  public function getCreatorEmail()
  {
    return $this->creatorEmail;
  }
  public function setDefaultViewport($defaultViewport)
  {
    $this->defaultViewport = $defaultViewport;
  }
  public function getDefaultViewport()
  {
    return $this->defaultViewport;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setDraftAccessList($draftAccessList)
  {
    $this->draftAccessList = $draftAccessList;
  }
  public function getDraftAccessList()
  {
    return $this->draftAccessList;
  }
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  public function getEtag()
  {
    return $this->etag;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setLastModifiedTime($lastModifiedTime)
  {
    $this->lastModifiedTime = $lastModifiedTime;
  }
  public function getLastModifiedTime()
  {
    return $this->lastModifiedTime;
  }
  public function setLastModifierEmail($lastModifierEmail)
  {
    $this->lastModifierEmail = $lastModifierEmail;
  }
  public function getLastModifierEmail()
  {
    return $this->lastModifierEmail;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setProcessingStatus($processingStatus)
  {
    $this->processingStatus = $processingStatus;
  }
  public function getProcessingStatus()
  {
    return $this->processingStatus;
  }
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  public function getProjectId()
  {
    return $this->projectId;
  }
  public function setPublishedAccessList($publishedAccessList)
  {
    $this->publishedAccessList = $publishedAccessList;
  }
  public function getPublishedAccessList()
  {
    return $this->publishedAccessList;
  }
  public function setPublishingStatus($publishingStatus)
  {
    $this->publishingStatus = $publishingStatus;
  }
  public function getPublishingStatus()
  {
    return $this->publishingStatus;
  }
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  public function getTags()
  {
    return $this->tags;
  }
  public function setVersions($versions)
  {
    $this->versions = $versions;
  }
  public function getVersions()
  {
    return $this->versions;
  }
  public function setWritersCanEditPermissions($writersCanEditPermissions)
  {
    $this->writersCanEditPermissions = $writersCanEditPermissions;
  }
  public function getWritersCanEditPermissions()
  {
    return $this->writersCanEditPermissions;
  }
}

class GoogleGAL_Service_MapsEngine_MapFolder extends GoogleGAL_Service_MapsEngine_MapItem
{
  protected $collection_key = 'defaultViewport';
  protected $internal_gapi_mappings = array(
  );
  protected $contentsType = 'GoogleGAL_Service_MapsEngine_MapItem';
  protected $contentsDataType = 'array';
  public $defaultViewport;
  public $expandable;
  public $key;
  public $name;
  public $visibility;
  protected function gapiInit()
  {
    $this->type = 'folder';
  }

  public function setContents($contents)
  {
    $this->contents = $contents;
  }
  public function getContents()
  {
    return $this->contents;
  }
  public function setDefaultViewport($defaultViewport)
  {
    $this->defaultViewport = $defaultViewport;
  }
  public function getDefaultViewport()
  {
    return $this->defaultViewport;
  }
  public function setExpandable($expandable)
  {
    $this->expandable = $expandable;
  }
  public function getExpandable()
  {
    return $this->expandable;
  }
  public function setKey($key)
  {
    $this->key = $key;
  }
  public function getKey()
  {
    return $this->key;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setVisibility($visibility)
  {
    $this->visibility = $visibility;
  }
  public function getVisibility()
  {
    return $this->visibility;
  }
}

class GoogleGAL_Service_MapsEngine_MapItem extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $type;


  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
}

class GoogleGAL_Service_MapsEngine_MapKmlLink extends GoogleGAL_Service_MapsEngine_MapItem
{
  protected $collection_key = 'defaultViewport';
  protected $internal_gapi_mappings = array(
  );
  public $defaultViewport;
  public $kmlUrl;
  public $name;
  public $visibility;
  protected function gapiInit()
  {
    $this->type = 'kmlLink';
  }

  public function setDefaultViewport($defaultViewport)
  {
    $this->defaultViewport = $defaultViewport;
  }
  public function getDefaultViewport()
  {
    return $this->defaultViewport;
  }
  public function setKmlUrl($kmlUrl)
  {
    $this->kmlUrl = $kmlUrl;
  }
  public function getKmlUrl()
  {
    return $this->kmlUrl;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setVisibility($visibility)
  {
    $this->visibility = $visibility;
  }
  public function getVisibility()
  {
    return $this->visibility;
  }
}

class GoogleGAL_Service_MapsEngine_MapLayer extends GoogleGAL_Service_MapsEngine_MapItem
{
  protected $collection_key = 'defaultViewport';
  protected $internal_gapi_mappings = array(
  );
  public $defaultViewport;
  public $id;
  public $key;
  public $name;
  public $visibility;
  protected function gapiInit()
  {
    $this->type = 'layer';
  }

  public function setDefaultViewport($defaultViewport)
  {
    $this->defaultViewport = $defaultViewport;
  }
  public function getDefaultViewport()
  {
    return $this->defaultViewport;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setKey($key)
  {
    $this->key = $key;
  }
  public function getKey()
  {
    return $this->key;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setVisibility($visibility)
  {
    $this->visibility = $visibility;
  }
  public function getVisibility()
  {
    return $this->visibility;
  }
}

class GoogleGAL_Service_MapsEngine_MapsListResponse extends GoogleGAL_Collection
{
  protected $collection_key = 'maps';
  protected $internal_gapi_mappings = array(
  );
  protected $mapsType = 'GoogleGAL_Service_MapsEngine_Map';
  protected $mapsDataType = 'array';
  public $nextPageToken;


  public function setMaps($maps)
  {
    $this->maps = $maps;
  }
  public function getMaps()
  {
    return $this->maps;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class GoogleGAL_Service_MapsEngine_MapsengineFile extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $filename;
  public $size;
  public $uploadStatus;


  public function setFilename($filename)
  {
    $this->filename = $filename;
  }
  public function getFilename()
  {
    return $this->filename;
  }
  public function setSize($size)
  {
    $this->size = $size;
  }
  public function getSize()
  {
    return $this->size;
  }
  public function setUploadStatus($uploadStatus)
  {
    $this->uploadStatus = $uploadStatus;
  }
  public function getUploadStatus()
  {
    return $this->uploadStatus;
  }
}

class GoogleGAL_Service_MapsEngine_Parent extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $id;


  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
}

class GoogleGAL_Service_MapsEngine_ParentsListResponse extends GoogleGAL_Collection
{
  protected $collection_key = 'parents';
  protected $internal_gapi_mappings = array(
  );
  public $nextPageToken;
  protected $parentsType = 'GoogleGAL_Service_MapsEngine_Parent';
  protected $parentsDataType = 'array';


  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setParents($parents)
  {
    $this->parents = $parents;
  }
  public function getParents()
  {
    return $this->parents;
  }
}

class GoogleGAL_Service_MapsEngine_Permission extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $discoverable;
  public $id;
  public $role;
  public $type;


  public function setDiscoverable($discoverable)
  {
    $this->discoverable = $discoverable;
  }
  public function getDiscoverable()
  {
    return $this->discoverable;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setRole($role)
  {
    $this->role = $role;
  }
  public function getRole()
  {
    return $this->role;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
}

class GoogleGAL_Service_MapsEngine_PermissionsBatchDeleteRequest extends GoogleGAL_Collection
{
  protected $collection_key = 'ids';
  protected $internal_gapi_mappings = array(
  );
  public $ids;


  public function setIds($ids)
  {
    $this->ids = $ids;
  }
  public function getIds()
  {
    return $this->ids;
  }
}

class GoogleGAL_Service_MapsEngine_PermissionsBatchDeleteResponse extends GoogleGAL_Model
{
}

class GoogleGAL_Service_MapsEngine_PermissionsBatchUpdateRequest extends GoogleGAL_Collection
{
  protected $collection_key = 'permissions';
  protected $internal_gapi_mappings = array(
  );
  protected $permissionsType = 'GoogleGAL_Service_MapsEngine_Permission';
  protected $permissionsDataType = 'array';


  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
  public function getPermissions()
  {
    return $this->permissions;
  }
}

class GoogleGAL_Service_MapsEngine_PermissionsBatchUpdateResponse extends GoogleGAL_Model
{
}

class GoogleGAL_Service_MapsEngine_PermissionsListResponse extends GoogleGAL_Collection
{
  protected $collection_key = 'permissions';
  protected $internal_gapi_mappings = array(
  );
  protected $permissionsType = 'GoogleGAL_Service_MapsEngine_Permission';
  protected $permissionsDataType = 'array';


  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
  public function getPermissions()
  {
    return $this->permissions;
  }
}

class GoogleGAL_Service_MapsEngine_PointStyle extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $iconType = 'GoogleGAL_Service_MapsEngine_IconStyle';
  protected $iconDataType = '';
  protected $labelType = 'GoogleGAL_Service_MapsEngine_LabelStyle';
  protected $labelDataType = '';


  public function setIcon(GoogleGAL_Service_MapsEngine_IconStyle $icon)
  {
    $this->icon = $icon;
  }
  public function getIcon()
  {
    return $this->icon;
  }
  public function setLabel(GoogleGAL_Service_MapsEngine_LabelStyle $label)
  {
    $this->label = $label;
  }
  public function getLabel()
  {
    return $this->label;
  }
}

class GoogleGAL_Service_MapsEngine_PolygonStyle extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $fillType = 'GoogleGAL_Service_MapsEngine_Color';
  protected $fillDataType = '';
  protected $labelType = 'GoogleGAL_Service_MapsEngine_LabelStyle';
  protected $labelDataType = '';
  protected $strokeType = 'GoogleGAL_Service_MapsEngine_Border';
  protected $strokeDataType = '';


  public function setFill(GoogleGAL_Service_MapsEngine_Color $fill)
  {
    $this->fill = $fill;
  }
  public function getFill()
  {
    return $this->fill;
  }
  public function setLabel(GoogleGAL_Service_MapsEngine_LabelStyle $label)
  {
    $this->label = $label;
  }
  public function getLabel()
  {
    return $this->label;
  }
  public function setStroke(GoogleGAL_Service_MapsEngine_Border $stroke)
  {
    $this->stroke = $stroke;
  }
  public function getStroke()
  {
    return $this->stroke;
  }
}

class GoogleGAL_Service_MapsEngine_ProcessResponse extends GoogleGAL_Model
{
}

class GoogleGAL_Service_MapsEngine_Project extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $id;
  public $name;


  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
}

class GoogleGAL_Service_MapsEngine_ProjectsListResponse extends GoogleGAL_Collection
{
  protected $collection_key = 'projects';
  protected $internal_gapi_mappings = array(
  );
  protected $projectsType = 'GoogleGAL_Service_MapsEngine_Project';
  protected $projectsDataType = 'array';


  public function setProjects($projects)
  {
    $this->projects = $projects;
  }
  public function getProjects()
  {
    return $this->projects;
  }
}

class GoogleGAL_Service_MapsEngine_PublishResponse extends GoogleGAL_Model
{
}

class GoogleGAL_Service_MapsEngine_PublishedLayer extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $description;
  public $id;
  public $layerType;
  public $name;
  public $projectId;


  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setLayerType($layerType)
  {
    $this->layerType = $layerType;
  }
  public function getLayerType()
  {
    return $this->layerType;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  public function getProjectId()
  {
    return $this->projectId;
  }
}

class GoogleGAL_Service_MapsEngine_PublishedLayersListResponse extends GoogleGAL_Collection
{
  protected $collection_key = 'layers';
  protected $internal_gapi_mappings = array(
  );
  protected $layersType = 'GoogleGAL_Service_MapsEngine_PublishedLayer';
  protected $layersDataType = 'array';
  public $nextPageToken;


  public function setLayers($layers)
  {
    $this->layers = $layers;
  }
  public function getLayers()
  {
    return $this->layers;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class GoogleGAL_Service_MapsEngine_PublishedMap extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $contentsType = 'GoogleGAL_Service_MapsEngine_MapItem';
  protected $contentsDataType = '';
  public $defaultViewport;
  public $description;
  public $id;
  public $name;
  public $projectId;


  public function setContents(GoogleGAL_Service_MapsEngine_MapItem $contents)
  {
    $this->contents = $contents;
  }
  public function getContents()
  {
    return $this->contents;
  }
  public function setDefaultViewport($defaultViewport)
  {
    $this->defaultViewport = $defaultViewport;
  }
  public function getDefaultViewport()
  {
    return $this->defaultViewport;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  public function getProjectId()
  {
    return $this->projectId;
  }
}

class GoogleGAL_Service_MapsEngine_PublishedMapsListResponse extends GoogleGAL_Collection
{
  protected $collection_key = 'maps';
  protected $internal_gapi_mappings = array(
  );
  protected $mapsType = 'GoogleGAL_Service_MapsEngine_PublishedMap';
  protected $mapsDataType = 'array';
  public $nextPageToken;


  public function setMaps($maps)
  {
    $this->maps = $maps;
  }
  public function getMaps()
  {
    return $this->maps;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class GoogleGAL_Service_MapsEngine_Raster extends GoogleGAL_Collection
{
  protected $collection_key = 'files';
  protected $internal_gapi_mappings = array(
  );
  protected $acquisitionTimeType = 'GoogleGAL_Service_MapsEngine_AcquisitionTime';
  protected $acquisitionTimeDataType = '';
  public $attribution;
  public $bbox;
  public $creationTime;
  public $creatorEmail;
  public $description;
  public $draftAccessList;
  public $etag;
  protected $filesType = 'GoogleGAL_Service_MapsEngine_MapsengineFile';
  protected $filesDataType = 'array';
  public $id;
  public $lastModifiedTime;
  public $lastModifierEmail;
  public $maskType;
  public $name;
  public $processingStatus;
  public $projectId;
  public $rasterType;
  public $tags;
  public $writersCanEditPermissions;


  public function setAcquisitionTime(GoogleGAL_Service_MapsEngine_AcquisitionTime $acquisitionTime)
  {
    $this->acquisitionTime = $acquisitionTime;
  }
  public function getAcquisitionTime()
  {
    return $this->acquisitionTime;
  }
  public function setAttribution($attribution)
  {
    $this->attribution = $attribution;
  }
  public function getAttribution()
  {
    return $this->attribution;
  }
  public function setBbox($bbox)
  {
    $this->bbox = $bbox;
  }
  public function getBbox()
  {
    return $this->bbox;
  }
  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }
  public function getCreationTime()
  {
    return $this->creationTime;
  }
  public function setCreatorEmail($creatorEmail)
  {
    $this->creatorEmail = $creatorEmail;
  }
  public function getCreatorEmail()
  {
    return $this->creatorEmail;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setDraftAccessList($draftAccessList)
  {
    $this->draftAccessList = $draftAccessList;
  }
  public function getDraftAccessList()
  {
    return $this->draftAccessList;
  }
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  public function getEtag()
  {
    return $this->etag;
  }
  public function setFiles($files)
  {
    $this->files = $files;
  }
  public function getFiles()
  {
    return $this->files;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setLastModifiedTime($lastModifiedTime)
  {
    $this->lastModifiedTime = $lastModifiedTime;
  }
  public function getLastModifiedTime()
  {
    return $this->lastModifiedTime;
  }
  public function setLastModifierEmail($lastModifierEmail)
  {
    $this->lastModifierEmail = $lastModifierEmail;
  }
  public function getLastModifierEmail()
  {
    return $this->lastModifierEmail;
  }
  public function setMaskType($maskType)
  {
    $this->maskType = $maskType;
  }
  public function getMaskType()
  {
    return $this->maskType;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setProcessingStatus($processingStatus)
  {
    $this->processingStatus = $processingStatus;
  }
  public function getProcessingStatus()
  {
    return $this->processingStatus;
  }
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  public function getProjectId()
  {
    return $this->projectId;
  }
  public function setRasterType($rasterType)
  {
    $this->rasterType = $rasterType;
  }
  public function getRasterType()
  {
    return $this->rasterType;
  }
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  public function getTags()
  {
    return $this->tags;
  }
  public function setWritersCanEditPermissions($writersCanEditPermissions)
  {
    $this->writersCanEditPermissions = $writersCanEditPermissions;
  }
  public function getWritersCanEditPermissions()
  {
    return $this->writersCanEditPermissions;
  }
}

class GoogleGAL_Service_MapsEngine_RasterCollection extends GoogleGAL_Collection
{
  protected $collection_key = 'bbox';
  protected $internal_gapi_mappings = array(
  );
  public $attribution;
  public $bbox;
  public $creationTime;
  public $creatorEmail;
  public $description;
  public $draftAccessList;
  public $etag;
  public $id;
  public $lastModifiedTime;
  public $lastModifierEmail;
  public $mosaic;
  public $name;
  public $processingStatus;
  public $projectId;
  public $rasterType;
  public $tags;
  public $writersCanEditPermissions;


  public function setAttribution($attribution)
  {
    $this->attribution = $attribution;
  }
  public function getAttribution()
  {
    return $this->attribution;
  }
  public function setBbox($bbox)
  {
    $this->bbox = $bbox;
  }
  public function getBbox()
  {
    return $this->bbox;
  }
  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }
  public function getCreationTime()
  {
    return $this->creationTime;
  }
  public function setCreatorEmail($creatorEmail)
  {
    $this->creatorEmail = $creatorEmail;
  }
  public function getCreatorEmail()
  {
    return $this->creatorEmail;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setDraftAccessList($draftAccessList)
  {
    $this->draftAccessList = $draftAccessList;
  }
  public function getDraftAccessList()
  {
    return $this->draftAccessList;
  }
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  public function getEtag()
  {
    return $this->etag;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setLastModifiedTime($lastModifiedTime)
  {
    $this->lastModifiedTime = $lastModifiedTime;
  }
  public function getLastModifiedTime()
  {
    return $this->lastModifiedTime;
  }
  public function setLastModifierEmail($lastModifierEmail)
  {
    $this->lastModifierEmail = $lastModifierEmail;
  }
  public function getLastModifierEmail()
  {
    return $this->lastModifierEmail;
  }
  public function setMosaic($mosaic)
  {
    $this->mosaic = $mosaic;
  }
  public function getMosaic()
  {
    return $this->mosaic;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setProcessingStatus($processingStatus)
  {
    $this->processingStatus = $processingStatus;
  }
  public function getProcessingStatus()
  {
    return $this->processingStatus;
  }
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  public function getProjectId()
  {
    return $this->projectId;
  }
  public function setRasterType($rasterType)
  {
    $this->rasterType = $rasterType;
  }
  public function getRasterType()
  {
    return $this->rasterType;
  }
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  public function getTags()
  {
    return $this->tags;
  }
  public function setWritersCanEditPermissions($writersCanEditPermissions)
  {
    $this->writersCanEditPermissions = $writersCanEditPermissions;
  }
  public function getWritersCanEditPermissions()
  {
    return $this->writersCanEditPermissions;
  }
}

class GoogleGAL_Service_MapsEngine_RasterCollectionsListResponse extends GoogleGAL_Collection
{
  protected $collection_key = 'rasterCollections';
  protected $internal_gapi_mappings = array(
  );
  public $nextPageToken;
  protected $rasterCollectionsType = 'GoogleGAL_Service_MapsEngine_RasterCollection';
  protected $rasterCollectionsDataType = 'array';


  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setRasterCollections($rasterCollections)
  {
    $this->rasterCollections = $rasterCollections;
  }
  public function getRasterCollections()
  {
    return $this->rasterCollections;
  }
}

class GoogleGAL_Service_MapsEngine_RasterCollectionsRaster extends GoogleGAL_Collection
{
  protected $collection_key = 'tags';
  protected $internal_gapi_mappings = array(
  );
  public $bbox;
  public $creationTime;
  public $description;
  public $id;
  public $lastModifiedTime;
  public $name;
  public $projectId;
  public $rasterType;
  public $tags;


  public function setBbox($bbox)
  {
    $this->bbox = $bbox;
  }
  public function getBbox()
  {
    return $this->bbox;
  }
  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }
  public function getCreationTime()
  {
    return $this->creationTime;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setLastModifiedTime($lastModifiedTime)
  {
    $this->lastModifiedTime = $lastModifiedTime;
  }
  public function getLastModifiedTime()
  {
    return $this->lastModifiedTime;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  public function getProjectId()
  {
    return $this->projectId;
  }
  public function setRasterType($rasterType)
  {
    $this->rasterType = $rasterType;
  }
  public function getRasterType()
  {
    return $this->rasterType;
  }
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  public function getTags()
  {
    return $this->tags;
  }
}

class GoogleGAL_Service_MapsEngine_RasterCollectionsRasterBatchDeleteRequest extends GoogleGAL_Collection
{
  protected $collection_key = 'ids';
  protected $internal_gapi_mappings = array(
  );
  public $ids;


  public function setIds($ids)
  {
    $this->ids = $ids;
  }
  public function getIds()
  {
    return $this->ids;
  }
}

class GoogleGAL_Service_MapsEngine_RasterCollectionsRastersBatchDeleteResponse extends GoogleGAL_Model
{
}

class GoogleGAL_Service_MapsEngine_RasterCollectionsRastersBatchInsertRequest extends GoogleGAL_Collection
{
  protected $collection_key = 'ids';
  protected $internal_gapi_mappings = array(
  );
  public $ids;


  public function setIds($ids)
  {
    $this->ids = $ids;
  }
  public function getIds()
  {
    return $this->ids;
  }
}

class GoogleGAL_Service_MapsEngine_RasterCollectionsRastersBatchInsertResponse extends GoogleGAL_Model
{
}

class GoogleGAL_Service_MapsEngine_RasterCollectionsRastersListResponse extends GoogleGAL_Collection
{
  protected $collection_key = 'rasters';
  protected $internal_gapi_mappings = array(
  );
  public $nextPageToken;
  protected $rastersType = 'GoogleGAL_Service_MapsEngine_RasterCollectionsRaster';
  protected $rastersDataType = 'array';


  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setRasters($rasters)
  {
    $this->rasters = $rasters;
  }
  public function getRasters()
  {
    return $this->rasters;
  }
}

class GoogleGAL_Service_MapsEngine_RastersListResponse extends GoogleGAL_Collection
{
  protected $collection_key = 'rasters';
  protected $internal_gapi_mappings = array(
  );
  public $nextPageToken;
  protected $rastersType = 'GoogleGAL_Service_MapsEngine_Raster';
  protected $rastersDataType = 'array';


  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setRasters($rasters)
  {
    $this->rasters = $rasters;
  }
  public function getRasters()
  {
    return $this->rasters;
  }
}

class GoogleGAL_Service_MapsEngine_ScaledShape extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $borderType = 'GoogleGAL_Service_MapsEngine_Border';
  protected $borderDataType = '';
  protected $fillType = 'GoogleGAL_Service_MapsEngine_Color';
  protected $fillDataType = '';
  public $shape;


  public function setBorder(GoogleGAL_Service_MapsEngine_Border $border)
  {
    $this->border = $border;
  }
  public function getBorder()
  {
    return $this->border;
  }
  public function setFill(GoogleGAL_Service_MapsEngine_Color $fill)
  {
    $this->fill = $fill;
  }
  public function getFill()
  {
    return $this->fill;
  }
  public function setShape($shape)
  {
    $this->shape = $shape;
  }
  public function getShape()
  {
    return $this->shape;
  }
}

class GoogleGAL_Service_MapsEngine_ScalingFunction extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $column;
  public $scalingType;
  protected $sizeRangeType = 'GoogleGAL_Service_MapsEngine_SizeRange';
  protected $sizeRangeDataType = '';
  protected $valueRangeType = 'GoogleGAL_Service_MapsEngine_ValueRange';
  protected $valueRangeDataType = '';


  public function setColumn($column)
  {
    $this->column = $column;
  }
  public function getColumn()
  {
    return $this->column;
  }
  public function setScalingType($scalingType)
  {
    $this->scalingType = $scalingType;
  }
  public function getScalingType()
  {
    return $this->scalingType;
  }
  public function setSizeRange(GoogleGAL_Service_MapsEngine_SizeRange $sizeRange)
  {
    $this->sizeRange = $sizeRange;
  }
  public function getSizeRange()
  {
    return $this->sizeRange;
  }
  public function setValueRange(GoogleGAL_Service_MapsEngine_ValueRange $valueRange)
  {
    $this->valueRange = $valueRange;
  }
  public function getValueRange()
  {
    return $this->valueRange;
  }
}

class GoogleGAL_Service_MapsEngine_Schema extends GoogleGAL_Collection
{
  protected $collection_key = 'columns';
  protected $internal_gapi_mappings = array(
  );
  protected $columnsType = 'GoogleGAL_Service_MapsEngine_TableColumn';
  protected $columnsDataType = 'array';
  public $primaryGeometry;
  public $primaryKey;


  public function setColumns($columns)
  {
    $this->columns = $columns;
  }
  public function getColumns()
  {
    return $this->columns;
  }
  public function setPrimaryGeometry($primaryGeometry)
  {
    $this->primaryGeometry = $primaryGeometry;
  }
  public function getPrimaryGeometry()
  {
    return $this->primaryGeometry;
  }
  public function setPrimaryKey($primaryKey)
  {
    $this->primaryKey = $primaryKey;
  }
  public function getPrimaryKey()
  {
    return $this->primaryKey;
  }
}

class GoogleGAL_Service_MapsEngine_SizeRange extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $max;
  public $min;


  public function setMax($max)
  {
    $this->max = $max;
  }
  public function getMax()
  {
    return $this->max;
  }
  public function setMin($min)
  {
    $this->min = $min;
  }
  public function getMin()
  {
    return $this->min;
  }
}

class GoogleGAL_Service_MapsEngine_Table extends GoogleGAL_Collection
{
  protected $collection_key = 'tags';
  protected $internal_gapi_mappings = array(
  );
  public $bbox;
  public $creationTime;
  public $creatorEmail;
  public $description;
  public $draftAccessList;
  public $etag;
  protected $filesType = 'GoogleGAL_Service_MapsEngine_MapsengineFile';
  protected $filesDataType = 'array';
  public $id;
  public $lastModifiedTime;
  public $lastModifierEmail;
  public $name;
  public $processingStatus;
  public $projectId;
  public $publishedAccessList;
  protected $schemaType = 'GoogleGAL_Service_MapsEngine_Schema';
  protected $schemaDataType = '';
  public $sourceEncoding;
  public $tags;
  public $writersCanEditPermissions;


  public function setBbox($bbox)
  {
    $this->bbox = $bbox;
  }
  public function getBbox()
  {
    return $this->bbox;
  }
  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }
  public function getCreationTime()
  {
    return $this->creationTime;
  }
  public function setCreatorEmail($creatorEmail)
  {
    $this->creatorEmail = $creatorEmail;
  }
  public function getCreatorEmail()
  {
    return $this->creatorEmail;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setDraftAccessList($draftAccessList)
  {
    $this->draftAccessList = $draftAccessList;
  }
  public function getDraftAccessList()
  {
    return $this->draftAccessList;
  }
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  public function getEtag()
  {
    return $this->etag;
  }
  public function setFiles($files)
  {
    $this->files = $files;
  }
  public function getFiles()
  {
    return $this->files;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setLastModifiedTime($lastModifiedTime)
  {
    $this->lastModifiedTime = $lastModifiedTime;
  }
  public function getLastModifiedTime()
  {
    return $this->lastModifiedTime;
  }
  public function setLastModifierEmail($lastModifierEmail)
  {
    $this->lastModifierEmail = $lastModifierEmail;
  }
  public function getLastModifierEmail()
  {
    return $this->lastModifierEmail;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setProcessingStatus($processingStatus)
  {
    $this->processingStatus = $processingStatus;
  }
  public function getProcessingStatus()
  {
    return $this->processingStatus;
  }
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  public function getProjectId()
  {
    return $this->projectId;
  }
  public function setPublishedAccessList($publishedAccessList)
  {
    $this->publishedAccessList = $publishedAccessList;
  }
  public function getPublishedAccessList()
  {
    return $this->publishedAccessList;
  }
  public function setSchema(GoogleGAL_Service_MapsEngine_Schema $schema)
  {
    $this->schema = $schema;
  }
  public function getSchema()
  {
    return $this->schema;
  }
  public function setSourceEncoding($sourceEncoding)
  {
    $this->sourceEncoding = $sourceEncoding;
  }
  public function getSourceEncoding()
  {
    return $this->sourceEncoding;
  }
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  public function getTags()
  {
    return $this->tags;
  }
  public function setWritersCanEditPermissions($writersCanEditPermissions)
  {
    $this->writersCanEditPermissions = $writersCanEditPermissions;
  }
  public function getWritersCanEditPermissions()
  {
    return $this->writersCanEditPermissions;
  }
}

class GoogleGAL_Service_MapsEngine_TableColumn extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $name;
  public $type;


  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
}

class GoogleGAL_Service_MapsEngine_TablesListResponse extends GoogleGAL_Collection
{
  protected $collection_key = 'tables';
  protected $internal_gapi_mappings = array(
  );
  public $nextPageToken;
  protected $tablesType = 'GoogleGAL_Service_MapsEngine_Table';
  protected $tablesDataType = 'array';


  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setTables($tables)
  {
    $this->tables = $tables;
  }
  public function getTables()
  {
    return $this->tables;
  }
}

class GoogleGAL_Service_MapsEngine_ValueRange extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $max;
  public $min;


  public function setMax($max)
  {
    $this->max = $max;
  }
  public function getMax()
  {
    return $this->max;
  }
  public function setMin($min)
  {
    $this->min = $min;
  }
  public function getMin()
  {
    return $this->min;
  }
}

class GoogleGAL_Service_MapsEngine_VectorStyle extends GoogleGAL_Collection
{
  protected $collection_key = 'displayRules';
  protected $internal_gapi_mappings = array(
  );
  protected $displayRulesType = 'GoogleGAL_Service_MapsEngine_DisplayRule';
  protected $displayRulesDataType = 'array';
  protected $featureInfoType = 'GoogleGAL_Service_MapsEngine_FeatureInfo';
  protected $featureInfoDataType = '';
  public $type;


  public function setDisplayRules($displayRules)
  {
    $this->displayRules = $displayRules;
  }
  public function getDisplayRules()
  {
    return $this->displayRules;
  }
  public function setFeatureInfo(GoogleGAL_Service_MapsEngine_FeatureInfo $featureInfo)
  {
    $this->featureInfo = $featureInfo;
  }
  public function getFeatureInfo()
  {
    return $this->featureInfo;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
}

class GoogleGAL_Service_MapsEngine_ZoomLevels extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $max;
  public $min;


  public function setMax($max)
  {
    $this->max = $max;
  }
  public function getMax()
  {
    return $this->max;
  }
  public function setMin($min)
  {
    $this->min = $min;
  }
  public function getMin()
  {
    return $this->min;
  }
}
