<form action="{{route('edit.save')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" value="{{Auth::user()->name}}" ><br><br>
    <label for="">اختر صورة شخصية</label><br>
    <input type="file" name="image_profile"><br><br>
    <label for="">اختر صورة غلاف</label><br>
    <input type="file" name="image_cover"><br><br>
    <input type="submit">
</form>
