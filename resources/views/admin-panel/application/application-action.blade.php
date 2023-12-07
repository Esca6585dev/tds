<span class="dtr-data d-flex">
    <a href="{{ route(Request::segment(3) . '.show', [ app()->getlocale(), $application->id ] ) }}"
        class="btn btn-sm btn-clean btn-icon mr-2" title="{{ __('View') }}">
        <span class="svg-icon svg-icon-xl svg-icon-primary">
            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Stockholm-icons-/-General-/-Visible" stroke="none" stroke-width="1" fill="none"
                    fill-rule="evenodd">
                    <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                    <path
                        d="M3,12 C3,12 5.45454545,6 12,6 C16.9090909,6 21,12 21,12 C21,12 16.9090909,18 12,18 C5.45454545,18 3,12 3,12 Z"
                        id="Shape" fill="#000000" fill-rule="nonzero" opacity="0.4"></path>
                    <path
                        d="M12,15 C10.3431458,15 9,13.6568542 9,12 C9,10.3431458 10.3431458,9 12,9 C13.6568542,9 15,10.3431458 15,12 C15,13.6568542 13.6568542,15 12,15 Z"
                        id="Path" fill="#000000" opacity="1"></path>
                </g>
            </svg>
        </span>
    </a>

    @if($application->deleted_at)
    <form action="{{ route(Request::segment(3) . '.destroy', [ app()->getlocale(), $application->id ] ) }}"
        method="post">
        @method('delete')
        @csrf

        <input type="hidden" name="method" value="restore" >

        <button type="button" class="btn btn-sm btn-clean btn-icon mr-2" title="{{ __('Delete') }}" data-toggle="modal"
            data-target="#restore-{{$application->id}}">
            <span class="svg-icon svg-icon-md svg-icon-secondary">
                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->
                    <title>{{ __('Restore') }}</title>
                    <g id="Stockholm-icons-/-Code-/-Time-schedule" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                        <path d="M10.9630156,7.5 L11.0475062,7.5 C11.3043819,7.5 11.5194647,7.69464724 11.5450248,7.95024814 L12,12.5 L15.2480695,14.3560397 C15.403857,14.4450611 15.5,14.6107328 15.5,14.7901613 L15.5,15 C15.5,15.2109164 15.3290185,15.3818979 15.1181021,15.3818979 C15.0841582,15.3818979 15.0503659,15.3773725 15.0176181,15.3684413 L10.3986612,14.1087258 C10.1672824,14.0456225 10.0132986,13.8271186 10.0316926,13.5879956 L10.4644883,7.96165175 C10.4845267,7.70115317 10.7017474,7.5 10.9630156,7.5 Z" id="Path-107" fill="#000000"></path>
                        <path d="M7.38979581,2.8349582 C8.65216735,2.29743306 10.0413491,2 11.5,2 C17.2989899,2 22,6.70101013 22,12.5 C22,18.2989899 17.2989899,23 11.5,23 C5.70101013,23 1,18.2989899 1,12.5 C1,11.5151324 1.13559454,10.5619345 1.38913364,9.65805651 L3.31481075,10.1982117 C3.10672013,10.940064 3,11.7119264 3,12.5 C3,17.1944204 6.80557963,21 11.5,21 C16.1944204,21 20,17.1944204 20,12.5 C20,7.80557963 16.1944204,4 11.5,4 C10.54876,4 9.62236069,4.15592757 8.74872191,4.45446326 L9.93948308,5.87355717 C10.0088058,5.95617272 10.0495583,6.05898805 10.05566,6.16666224 C10.0712834,6.4423623 9.86044965,6.67852665 9.5847496,6.69415008 L4.71777931,6.96995273 C4.66931162,6.97269931 4.62070229,6.96837279 4.57348157,6.95710938 C4.30487471,6.89303938 4.13906482,6.62335149 4.20313482,6.35474463 L5.33163823,1.62361064 C5.35654118,1.51920756 5.41437908,1.4255891 5.49660017,1.35659741 C5.7081375,1.17909652 6.0235153,1.2066885 6.2010162,1.41822583 L7.38979581,2.8349582 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
                    </g>
                </svg>
            </span>
        </button>

        <div class="example-preview">
            <!--begin::Modal-->
            <div class="modal fade" id="restore-{{$application->id}}" tabindex="-1" aria-labelledby="restore-{{$application->id}}"
                style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{ __('Warning') }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i aria-hidden="true" class="ki ki-close"></i>
                            </button>
                        </div>
                        <div class="modal-body">{{ __('Are you sure you want to restore this resource?') }}</div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary font-weight-bold"
                                data-dismiss="modal">{{ __('Close') }}</button>

                            <button type="submit"
                                class="btn btn-primary font-weight-bold">{{ __('Restore') }}</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Modal-->
        </div>

    </form>
    @else
    <form action="{{ route(Request::segment(3) . '.destroy', [ app()->getlocale(), $application->id ] ) }}"
        method="post">
        @method('delete')
        @csrf

        <input type="hidden" name="method" value="delete" >

        <button type="button" class="btn btn-sm btn-clean btn-icon" title="{{ __('Delete') }}" data-toggle="modal"
            data-target="#delete-{{$application->id}}">
            <span class="svg-icon svg-icon-md svg-icon-danger">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                    height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"></rect>
                        <path
                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                            fill="#000000" fill-rule="nonzero">
                        </path>
                        <path
                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 
                            5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                            fill="#000000" opacity="0.3">
                        </path>
                    </g>
                </svg>
            </span>
        </button>

        <div class="example-preview">
            <!--begin::Modal-->
            <div class="modal fade" id="delete-{{$application->id}}" tabindex="-1" aria-labelledby="delete-{{$application->id}}"
                style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{ __('Warning') }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i aria-hidden="true" class="ki ki-close"></i>
                            </button>
                        </div>
                        <div class="modal-body">{{ __('Are you sure you want to delete this resource?') }}</div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary font-weight-bold"
                                data-dismiss="modal">{{ __('Close') }}</button>

                            <button type="submit"
                                class="btn btn-light-danger font-weight-bold">{{ __('Delete') }}</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Modal-->
        </div>

    </form>
    @endif
</span>
