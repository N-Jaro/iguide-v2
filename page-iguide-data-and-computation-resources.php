<?php 
    get_header();
?>
    <div class="page-title tw-w-full tw-block  tw-relative tw--mt-[200px] tw-pt-[200px]" >
        <div class="tw-container tw-mx-auto tw-px-4 tw-h-min-[200px] tw-pb-[80px] tw-pt-12">
            <div class="tw-border-l-8 tw-pl-3 tw-border-ig-orange tw-text-white tw-font-semibold tw-text-2xl">
                <h1><?php the_title();?></h1>
            </div>
        </div>
        <div class="custom-shape-divider-bottom-1675786129">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="page-content tw-w-full tw-flex tw-relative tw-bg-white tw-mt-5 tw-mb-16">
        <div class="tw-container tw-mx-auto tw-px-4 tw-py-6">
        <div class="row">
            <!--Grid column-->
            <div class="dataResources col-md-3 mb-4 ">
                <ul class="nav md-pills pills-secondary d-flex flex-column" id="menu">
                    <!-- <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#overview" role="tab">Overview</a>
                    </li> -->
                    <li class="nav-item">
                        <h5>Computing Environment</h5> 
                        <!-- environment -->
                        <ul>
                            <li>
                                <a class="nav-link active" data-toggle="tab" role="tab" href="#jupyter">Jupyter</a>
                            </li>
                            <li>
                                <a class="nav-link" data-toggle="tab" role="tab" href="#rstudio">RStudio</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <h5>Data and Tools</h5>
                        <!-- DataTools -->
                        <ul>
                            <li>
                                <a class="nav-link" data-toggle="tab" role="tab" href="#Connectors">Data Connectors</a>
                            </li>
                            <li>
                                <a class="nav-link" data-toggle="tab" role="tab" href="#Processors">Data Processors</a>
                            </li>
                            <li>
                                <a class="nav-link" data-toggle="tab" role="tab" href="#Repository">Data Repository</a>
                            </li>
                            <li>
                                <a class="nav-link" data-toggle="tab" role="tab" href="#Workflow">Data Workflow</a>
                            </li>
                            <li>
                                <a class="nav-link" data-toggle="tab" role="tab" href="#Models">Models and tools</a>
                            </li>
                            <li>
                                <a class="nav-link" data-toggle="tab" role="tab" href="#Publishing">Publishing</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <h5>Science Gateways</h5>
                        <!-- Gateways -->
                        <ul>
                            <li>
                                <a target="_blank" rel="noopener noreferrer" href="https://cybergisxhub.cigi.illinois.edu/">CyberGISX</a>
                            </li>
                            <li>
                                <a target="_blank" rel="noopener noreferrer" href="https://www.hydroshare.org/">HydroShare</a>
                            </li>
                            <li>
                                <a target="_blank" rel="noopener noreferrer" href="https://mygeohub.org/">MyGeoHub</a>
                            </li>
                            <li>
                                <a target="_blank" rel="noopener noreferrer" href="https://mygeohub.org/groups/gabbs/aboutstreamci">StreamCI</a>
                            </li>
                            <li>
                                <a target="_blank" rel="noopener noreferrer" href="https://science-gateway.unidata.ucar.edu/">Unidata Gateway</a>
                            </li>
                        </ul>
                    </li>
                    <li clss="nav-link">
                        <h5><a class="nav-link px-0" data-toggle="tab" role="tab" href="#training">Training resources</a></h5>
                    </li>
                    <li class="nav-item">
                        <h5><a class="nav-link px-0" data-toggle="tab" href="#Resources" role="tab">Computing Resources</a></h5>
                    </li>
                </ul>
            </div>
            <!--Grid column-->
            <!--Grid column-->
            <div class="col-md-9 mb-4">
                <!-- Tab panels -->
                <div class="tab-content pt-0">
                <!--Panel 2-->
                <div class="tab-pane fade" id="environment" role="tabpanel">
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
                    porro voluptate odit minima.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
                    porro voluptate odit minima.</p>
                </div>
                <!--/.Panel 2-->

                <!--Panel 3-->
                <div class="tab-pane fade in show active" id="jupyter" role="tabpanel">
                    <div class="row">
                        <div class="container">
                            <h4>CyberGISX</h4>
                            <ul>
                                <li>Hosted on Virtual ROGER (and mirrored on Jetstream as a backup)</li>
                                <li>Signup with institutional accounts through CILogon</li>
                                <li>Jupyter Notebook and Lab interface</li>
                                <li>Versioned kernels with prebuilt geospatial libs/tools</li>
                                <li>Job submissions from Jupyter to HPC resources using CyberGIS-Compute</li>
                            </ul>
                            <p><b>URL:</b> <a href="https://cybergisxhub.cigi.illinois.edu/" target="_blank" rel="noopener noreferrer">https://cybergisxhub.cigi.illinois.edu/</a></p>
                            <hr>
                            <br>
                            <h4>CyberGIS-Jupyter for Water (CJW)</h4>
                            <ul>
                                <li>CyberGIS-based water research platform integrated with HydroShare</li>
                                <li>Hosted on JetStream</li>
                                <li>HydroShare login</li>
                                <li>Bidirectional data transfer between HydroShare and Jupyter</li>
                            </ul>
                            <p><b>URL:</b> <a href="https://go.illinois.edu/cybergis-jupyter-water" target="_blank" rel="noopener noreferrer">https://go.illinois.edu/cybergis-jupyter-water</a></p>
                            <hr>
                            <br>
                            <h4>HydroShare/CUAHSI JupyterHub</h4>
                            <ul>
                                <li>Hosted on the Google Cloud Platform</li>
                                <li>5Gb of persistent storage</li>
                                <li>Multiple purpose-built environments to support water science research and education</li>
                                <li>Jupyter notebook, Lab, and RStudio coding interfaces</li>
                                <li>Bidirectional data transfer between HydroShare and Jupyter Environmentas via Python libraries and the HydroShare-on-JupyterHub lab plugin</li>
                            </ul>
                            <p>
                                <b>URL:</b> 
                                <br> 
                                <a href="https://jupyterhub.cuahsi.org" target="_blank" rel="noopener noreferrer">https://jupyterhub.cuahsi.org</a> 
                                <br> 
                                <a href="https://www.hydroshare.org" target="_blank" rel="noopener noreferrer">https://www.hydroshare.org</a>
                            </p>
                            <hr>
                            <br>
                            <h4>MyGeoHub</h4>
                            <ul>
                                <li>kernel with common geospatial libraries (GDAL, QGIS)</li>
                                <li>access to HPC</li>
                                <li>HydroShare login</li>
                                <li>linked to HUB courses</li>
                                <li>GeoEDF data framework enabled</li> 
                                <li>Notebook converted to online published tool</li>
                            </ul>
                            <p><b>URL:</b> <a href="https://mygeohub.org/tools/jupyter70" target="_blank" rel="noopener noreferrer">https://mygeohub.org/tools/jupyter70</a></p>
                            <hr>
                            <br>
                            <h4>Open OnDemand</h4>
                            <ul>
                                <li>run on Anvil cluster</li>
                            </ul>
                            <p><b>URL:</b> <a href="https://ondemand.anvil.rcac.purdue.edu/" target="_blank" rel="noopener noreferrer">https://ondemand.anvil.rcac.purdue.edu/</a></p>
                        </div>
                    </div>
                </div>
                <!--/.Panel 3-->

                <!--Panel 4-->
                <div class="tab-pane fade" id="rstudio" role="tabpanel">
                    <div class="row">
                        <div class="container">
                            <h4>MyGeoHub</h4>
                            <ul>
                                <li>Runs RStudio in a browser</li>
                                <li>Access to HPC</li>
                                <li>Link to Hub courses</li>
                                <li>may convert to online published tools</li>
                            </ul>
                            <p><b>URL:</b> <a href="https://mygeohub.org/tools/rstudio" target="_blank" rel="noopener noreferrer">https://mygeohub.org/tools/rstudio</a></p>
                            <hr>
                            <br>
                            <h4>OpenOnDemand</h4>
                            <ul>
                                <li>run on Anvil cluster</li>
                            </ul>
                            <p><b>URL:</b> <a href="https://ondemand.anvil.rcac.purdue.edu/" target="_blank" rel="noopener noreferrer">https://ondemand.anvil.rcac.purdue.edu/</a></p>
                            <hr>
                            <br>
                            <h4>CUAHSI JupyterHub</h4>
                            <ul>
                                <li>Jupyter notebook, Lab, and RStudio coding interfaces</li>
                            </ul>
                            <p><b>URL:</b> <a href="https://jupyterhub.cuahsi.org" target="_blank" rel="noopener noreferrer">https://jupyterhub.cuahsi.org</a></p>
                        </div>
                    </div>
                </div>
                <!--/.Panel 4-->
                <!--Panel 1-->
                <div class="tab-pane fade" id="Resources" role="tabpanel">
                    <div class="row">
                        <div class="container">
                            <h4>Purdue Anvil</h4>
                            <ul>
                                <li>Support Kubernetes based deployment via Rancher GPU System</li>
                                <li>16 GPU nodes with four A100 GPUs eachLarge Memory SystemA</li>
                                <li>32 nodes with 1 TB RAM eachTraditional HPC</li>
                                <li>1000 AMD Epyc 128-core nodes, Slurm job submission Interactive Computing</li>
                                <li>Open OnDemand, Thinlinc remote desktop</li>
                            </ul>
                            <p><b>URL:</b> <a href="hhttps://www.rcac.purdue.edu/anvil" target="_blank" rel="noopener noreferrer">https://www.rcac.purdue.edu/anvil</a></p>
                            <hr>
                            <br>
                            <h4>NCSA Delta</h4>
                            <ul>
                                <li>124 CPU nodes with 2 AMD EPYC 7763 (Milan) 64-core processors</li>
                                <li>4 different GPU node configurations supporting 400 A100 GPUs, 400 A40 GPUs and 8 M100 GPUs</li>
                            </ul>
                            <p><b>URL:</b> <a href="https://allocations.access-ci.org/resources" target="_blank" rel="noopener noreferrer">https://allocations.access-ci.org/resources</a></p>
                        </div>
                    </div>
                </div>
                <!--/.Panel 1-->

                <!--Panel 4-->
                <div class="tab-pane fade" id="DataTools" role="tabpanel">
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
                    porro voluptate odit minima.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
                    porro voluptate odit minima.</p>
                </div>
                <!--/.Panel 4-->

                <!--Panel 2-->
                <div class="tab-pane fade" id="Connectors" role="tabpanel">
                    <div class="row">
                        <div class="container">
                            <h4>GeoEDF</h4>
                            <ul>
                                <li>
                                    Input Plugins
                                    <ul>
                                        <li>NASAInput</li>
                                        <li>FAOInput</li>
                                        <li>WQPInput</li>
                                        <li>DamFIMInput</li>
                                        <li>ERA5Input</li>
                                    </ul>
                                </li>
                                
                                <li>Filter Plugins
                                    <ul>
                                        <li>PathFilter</li>
                                        <li>DatetimeFilter</li>
                                        <li>DamFilter</li>
                                    </ul>
                                </li>
                            </ul>
                            <p>
                                <b>URL:</b> 
                                <a href="https://geoedf.readthedocs.io/en/latest/connectors-list.html" target="_blank" rel="noopener noreferrer">https://geoedf.readthedocs.io/en/latest/connectors-list.html</a> 
                            </p>
                        </div>
                    </div>
                </div>
                <!--/.Panel 2-->

                <!--Panel 3-->
                <div class="tab-pane fade" id="Processors" role="tabpanel">
                    <div class="row">
                        <div class="container">
                            <h4>GeoEDF</h4>
                            <ul>
                                <li>HDFEOSShapefileMask</li>
                                <li>SIMPLE Data Preprocessor (Part 1)</li>
                                <li>CSV to Header Array Format (HAR) conversion</li>
                                <li>WQPMap</li>
                            </ul>
                            <p>
                                <b>URL:</b> 
                                <a href="https://geoedf.readthedocs.io/en/latest/processors-list.html" target="_blank" rel="noopener noreferrer">https://geoedf.readthedocs.io/en/latest/processors-list.html</a> 
                            </p>
                        </div>
                    </div>
                </div>
                <!--/.Panel 3-->

                <!--Panel 4-->
                <div class="tab-pane fade" id="Repository" role="tabpanel">
                    <div class="row">
                        <div class="container">
                            <h4>HydroShare</h4>
                            <ul>
                                <li>Community repository for archiving, collaborating around, and publishing data, models, and notebooks/code</li>
                                <li>Public and private sharing of resources</li>
                                <li>Permanent publication of resources with DOI assignment</li>
                                <li>Group and Community functionality for sharing and collaboration</li>
                                <li>Flexible file-based data model for content within resources</li>
                                <li>Metadata catalog and discovery interface</li>
                                <li>Hosted at RENCI</li>
                                <li>Integration with 3rd party web applications and cloud computing tools, e.g. JupyterHub, MATLAB Online, etc.</li>
                                <li>Comprehensive REST API and Python Client library</li>
                            </ul>
                            <p>
                                <b>URL:</b> 
                                <a href="https://www.hydroshare.org" target="_blank" rel="noopener noreferrer">https://www.hydroshare.org</a> 
                            </p>
                        </div>
                    </div>
                </div>
                <!--/.Panel 4-->
                <!--Panel 1-->
                <div class="tab-pane fade" id="Workflow" role="tabpanel">
                    <div class="row">
                        <div class="container">
                            <h4>GeoEDF Workflow</h4>
                            <ul>
                                <li>Use GeoEDF to compose workflows consisting of data connectors and processors. Published workflows will be available</li>
                            </ul>
                            <p>
                                <b>URL:</b> 
                                <a href="https://geoedf.readthedocs.io/en/latest/index.html" target="_blank" rel="noopener noreferrer">https://geoedf.readthedocs.io/en/latest/index.html</a> 
                            </p>
                            <hr>
                            <br>
                            <h4>HydroShare</h4>
                            <ul>
                                <li>Workflows supported via notebooks/code shared in resources and launched into JupyterHub environments</li>
                            </ul>
                            <p>
                                <b>URL:</b> 
                                <br> 
                                <a href="https://jupyterhub.cuahsi.org" target="_blank" rel="noopener noreferrer">https://jupyterhub.cuahsi.org</a> 
                                <br> 
                                <a href="https://www.hydroshare.org" target="_blank" rel="noopener noreferrer">https://www.hydroshare.org</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!--/.Panel 1-->

                <!--Panel 2-->
                <div class="tab-pane fade" id="Models" role="tabpanel">
                    <div class="row">
                        <div class="container">
                            <h4><a href="https://mygeohub.org/groups/water-hub/swatshare_landing">SWATShare</a></h4> 
                            <p>A platform for online sharing, simulation and visualization of SWAT models</p>

                            <h4><a href="https://mygeohub.org/tools/simpleus">SIMPLE-G</a></h4> 
                           <p>the US version of the SIMPLE-G model for gridded cropland use, crop production, consumption and trade</p> 


                        <h4><a href="https://mygeohub.org/tools/hydroglobetool">HydroGlobe</a></h4>
                           <p>Minimize the processing tasks and deliver ready-to-use Earth observation data for hydrologic models</p> 

                        <h4><a href="https://mygeohub.org/groups/water-hub/swatflow">SWATFlow</a></h4>
                           <p> Provide high resolution river flow information for enhanced water resource management, education, and research. Users can upload their own SWAT model output and visualize the streamflow information.</p>

                        <h4><a href="https://mygeohub.org/tools/multispec">MultiSpec</a></h4>
                           <p>General image processing tool for remote sensing images and most geospatial data</p> 

                        <h4><a href="https://mygeohub.org/groups/u2u/purdue_acv">Ag Climate Viewer (ACV)</a></h4>
                           <p> Enable users to plot local monthly temperature and precipitation variation back to 1980, track county crop yields and trends (where data is available), and consider crop yields in the context of monthly temperature, precipitation and growing degree day (GDD50) data.</p>

                        <h4><a href="http://mygeohub.org/groups/u2u/purdue_gdd">Corn Growing Degree Day (GDD)</a></h4>
                           <p>Planning tool for corn growers. Offer trend projections through the end of the calendar year. GDD projections, combined with analysis of historical analog data</p>

                        <h4><a href="https://mygeohub.org/tools/guicalfews">California Food-Energy-Water System (CALFEWS) Model</a></h4>
                           <p> An open-sourced, Python-based model for simulating the integrated, multi-sector dynamics of water supply in the Central Valley of California. </p>

                        <h4><a href="https://mygeohub.org/tools/photo2bldg">Photo2Building</a></h4>
                           <p> Construct a 3-D building model (reconstruction) given a picture of a building</p>

                        <h4><a href="hhttps://mygeohub.org/tools/rzwqm2">Root Zone Water Quality Model</a></h4>
                          <p>  Whole-system model for studying crop production and environmental quality under current and changing climate conditions., developed by USDA-ARS</p>

                        <h4><a href="#">SboxN15</a></h4>
                           <p>This tool generates the time series data of concentrations of different chemicals in the atmosphere.</p> 

                        <h4><a href="#">CyclingTool</a></h4>
                           <p> Modeling of Cabon/Nitrogen cycling in agriculture soil</p>
                        </div>
                    </div>
                </div>
                <!--/.Panel 2-->

                <!--Panel 3-->
                <div class="tab-pane fade" id="Publishing" role="tabpanel">
                    <div class="row">
                        <div class="container">
                            <h4>HydroShare</h4>
                            <ul>
                                <li>Private sharing, public sharing, and permanent publication with DOI</li>
                                <li>App launching interface for interaction with HydroShare resources</li>
                            </ul>
                            <p>
                                <b>URL:</b> 
                                <a href="https://www.hydroshare.org" target="_blank" rel="noopener noreferrer">https://www.hydroshare.org</a>
                            </p>
                            <hr>
                            <br>
                            <h4>MyGeoHub</h4>
                            <ul>
                                <li>Publish datasets from project space and associate with DOI</li>
                                <li>Published tools automatically get a DOI</li>
                            </ul>
                            <p>
                                <b>URL:</b> 
                                <a href="https://cybergisxhub.cigi.illinois.edu/" target="_blank" rel="noopener noreferrer">https://cybergisxhub.cigi.illinois.edu/</a>
                            </p>
                            <hr>
                            <br>
                            <h4>CyberGISX</h4>
                            <ul>
                                <li>Publish/share notebooks on CyberGIS-Hub</li>
                                <li>Publish/share models through CyberGIS-Compute</li>
                            </ul>
                            <p>
                                <b>URL:</b> 
                                <a href="https://cybergisxhub.cigi.illinois.edu/" target="_blank" rel="noopener noreferrer">https://cybergisxhub.cigi.illinois.edu/</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!--/.Panel 3-->

                <!--Panel 3-->
                <div class="tab-pane fade" id="training" role="tabpanel">
                    <div class="row">
                        <div class="container">
                            <h4>MyGeoHub Courses</h4>
                            <ul>
                                <li><a target="_blank" rel="noopener noreferrer" href="https://mygeohub.org/courses/EAPS_DATAMINE_FAIR_CLIMATE_DATA">EAPS DataMine FAIR Climate Data Course</a></li>
                                <li><a target="_blank" rel="noopener noreferrer" href="https://mygeohub.org/courses/fair_climate">FAIR (Findable, Accessible Interoperable and Reusable) Climate and Water Science</a></li>
                                <li><a target="_blank" rel="noopener noreferrer" href="https://mygeohub.org/courses/global_change">Global Change and the Challenges of Sustainably Feeding a Growing Planet</a></li>
                                <li><a target="_blank" rel="noopener noreferrer" href="https://mygeohub.org/courses/rwater">RWater: A Cyber-enabled Data-driven Tool for Enhancing Hydrology Education </a></li>
                                <li><a target="_blank" rel="noopener noreferrer" href="https://mygeohub.org/courses/sustainability_shortcourse">2019 Short Course in Multi-scale Analysis of Sustainability</a></li>
                                <li><a target="_blank" rel="noopener noreferrer" href="https://mygeohub.org/courses/sustainability_shortcourse_copy">2022 Short Course in Multi-scale Analysis of Sustainability</a></li>
                                <li><a target="_blank" rel="noopener noreferrer" href="https://mygeohub.org/courses/Environmentalresearch">Python for Environmental Research</a></li>
                                <li><a target="_blank" rel="noopener noreferrer" href="https://mygeohub.org/courses/foodwaste">Understanding Food Waste Through the Trade-off and Opportunity Cost Concepts</a></li>
                                <li><a target="_blank" rel="noopener noreferrer" href="https://mygeohub.org/courses/geo_viewing">Short Course in Geospatial Data Extraction and Visualization</a></li>
                            </ul>
                            <hr>
                            <h4>UCGIS BoK</h4>
                            <ul>
                                <li>Provides knowledge modules for the domain of geographic information science and its associated technologies (GIS&T)</li>
                            </ul>
                            <p><b>URL:</b> <a target="_blank" rel="noopener noreferrer" href="https://gistbok.ucgis.org">https://gistbok.ucgis.org</a></p>
                        </div>
                    </div>
                </div>

                </div>
            </div>
            <!--Grid column-->
        </div>

        </div>
    </div>

<?php
    get_footer();
?>