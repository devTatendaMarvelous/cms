<x-dash>
                        <div class="row">
                         <div class="col-xl-6 col-lg-6 col-md-6  col-12">
                              <div class="card bg-white">
                                   <div class="card-body">
                                        <div class="card-block pt-2 pb-0">
                                             <div class="media">
                                                  <div class="media-body white text-left">
                                                       <h4 class="font-medium-5 card-title mb-0">${{ $totalRevenue }}</h4>
                                                       <span class="grey darken-1">Total Revenue</span>
                                                  </div>
                                                  <div class="media-right text-right">
                                                       <i class="icon-cup font-large-1 primary"></i>
                                                  </div>
                                             </div>
                                        </div>
                                        <div id="Widget-line-chart" class="height-150 lineChartWidget WidgetlineChart mb-2">
                                        </div>
                                   </div>
                              </div>
                         </div>
                         
                         <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                              <div class="card bg-white">
                                   <div class="card-body">
                                        <div class="card-block pt-2 pb-0">
                                             <div class="media">
                                                  <div class="media-body white text-left">
                                                       <h4 class="font-medium-5 card-title mb-0">{{ $totalOrders}}</h4>
                                                       <span class="grey darken-1">Total Orders</span>
                                                  </div>
                                                  <div class="media-right text-right">
                                                       <i class="icon-basket-loaded font-large-1 success"></i>
                                                  </div>
                                             </div>
                                        </div>
                                        <div id="Widget-line-chart2" class="height-150 lineChartWidget WidgetlineChart2 mb-2">
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <!--Statistics cards Ends-->

                    <!--Line with Area Chart 1 Starts-->
                    <div class="row match-height">
                         <div class="col-xl-12 col-lg-12 col-12">
                              <div class="card">
                                   <div class="card-header">
                                   <div class="card-title-wrap bar-success">
                                             <h4 class="card-title">Product Valuation</h4>
                                        </div>
                                   </div>
                                   <div class="card-body">
                                        <div class="card-block">
                                             <div id="line-chart" class="height-300 lineChart lineChartShadow">						
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    
                    </div>
                    <!--Line with Area Chart 1 Ends-->


</x-dash>