<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>

        @foreach($categories as $category)
            <li class="nav-group"><a class="nav-link" href="">
                    <svg class="nav-icon">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-puzzle"></use>
                    </svg> {{__("Pages")}}{{$category->name}} </a></li>
{{--                    ({{$category->subcategories->map(function ($subcategory){--}}
{{--                        return $subcategory->sum("category_id");--}}
{{--            })}})--}}






            @if($category->subcategories)
        <ul class="nav-group-items">
                    @foreach($category->subcategories as $subcategory)
                <li class="nav-item"><a class="nav-link" href=""><span class="nav-icon"></span> {{$subcategory->name}}</a>
                        @if($subcategory->subcategories)
                            <ul class="nav-group-items">
                                @foreach($subcategory->subcategories as $subsubcategory)
                                    <li class="nav-item">{{$subsubcategory->name}}</li>
                                @endforeach
                            </ul>
                        @endif
                        </li>
                    @endforeach
                </ul>
            @endif
            </li>
        @endforeach
{{--        <li class="nav-item"><a class="nav-link" href="#">--}}
{{--                <svg class="nav-icon">--}}
{{--                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-speedometer"></use>--}}
{{--                </svg> {{__("Dashboard")}}</a></li>--}}


{{--            <li class="nav-group"><a class="nav-link" href="#">--}}
{{--                    <svg class="nav-icon">--}}
{{--                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-puzzle"></use>--}}
{{--                    </svg> {{__("Pages")}}</a>--}}
{{--            </li>--}}

{{--            <li class="nav-title">{{__("Manage Checklists")}}</li>--}}

{{--                <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">--}}
{{--                        <svg class="nav-icon">--}}
{{--                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-puzzle"></use>--}}
{{--                        </svg> dsa</a>--}}
{{--                    <ul class="nav-group-items">--}}

{{--                            <li class="nav-item"><a class="nav-link" href=""><span class="nav-icon"></span> 321}</a></li>--}}

{{--                    </ul>--}}
{{--                </li>--}}



{{--    </ul>--}}
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>
