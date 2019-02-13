<select name="" id="">
@foreach(['dashboard','user','permissions','products'] as $menu_item)
        <option value="">
            {{$menu_item}}
        </option>
@endforeach
</select>
