                                                        <td style="padding:10px;">
                                                            @if($rowvaccines->vaccines_file)
                                                            
                                                                <div class="table-cell float-end">
                                                                    <!-- Button trigger modal -->
                                                                    <div type="button" data-toggle="modal" data-target="#exampleModalVaccines">
                                                                                @php
                                                                                    $data = strpos($rowvaccines->vaccines_file, '.');
                                                                                    $data_image = strpos($rowvaccines->vaccines_file, '.');
                                                                                    $url = $rowvaccines->vaccines_file;
                                                                                    $base_url = url('/'); 
                                                                                @endphp
                                                    
                                                                                @if($url)
                                                                                    @php
                                                                                        $fileExtension = pathinfo($url, PATHINFO_EXTENSION);
                                                                                    @endphp
                                                                                
                                                                                    @if($fileExtension === 'pdf')
                                                                                        <img src="https://cdn.vectorstock.com/i/preview-1x/86/09/pdf-download-icon-simple-flat-pictograph-vector-20048609.jpg" height="40px">
                                                                                    @elseif(in_array($fileExtension, ['mp4', 'avi', 'mov']))
                                                                                        <img src="https://www.iconpacks.net/icons/1/free-video-icon-818-thumb.png" controls height="30px">
                                                                                    @else
                                                                                        <img src="{{ asset('hipupload/'.$rowvaccines->vaccines_file) }}" height="200px">
                                                                                    @endif
                                                                                @endif
                                                                      
                                                                    </div>
                                                                    
                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="exampleModalVaccines" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                      <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                          <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Show</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                          </div>
                                                                            <div class="modal-body">
                                                                                <div class="container ml-4">
                                                                                    @php
                                                                                    $data = strpos($rowvaccines->vaccines_file, '.');
                                                                                    $data_image = strpos($rowvaccines->vaccines_file, '.');
                                                                                    $url = $rowvaccines->vaccines_file;
                                                                                    $base_url = url('/'); 
                                                                                    @endphp
                                                                                    
                                                                                    
                                                                                    @if($url)
                                                                                        @php
                                                                                            $fileExtension = pathinfo($url, PATHINFO_EXTENSION);
                                                                                        @endphp
                                                                                    
                                                                                        @if($fileExtension === 'pdf')
                                                                                            <iframe src="{{ asset('uploadvaccines/'.$rowvaccines->vaccines_file) }}" height="400px;" width="400px" alt="file"></iframe>
                                                                                        @elseif(in_array($fileExtension, ['mp4', 'avi', 'mov']))
                                                                                            <video src="{{ asset('uploadvaccines/'.$rowvaccines->vaccines_file) }}" controls height="200px"></video>
                                                                                        @else
                                                                                            <img src="{{ asset('uploadvaccines/'.$rowvaccines->vaccines_file) }}" height="200px">
                                                                                        @endif
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                          <div class="modal-footer">
                                                                             <a href="{{ url('webadmin/download-vaccine', ['file' => $rowvaccines->vaccines_file]) }}" class="btn btn-success">Download</a>
                                                                          </div>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        </td>