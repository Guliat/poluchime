<div>
   <div class="flex justify-start mb-3">
      <div class="">
         <a href="#" class="py-2 px-3 bg-blue-400 text-white text-xs">
            ФИЛТРИРАЙ
         </a>
      </div>
   </div>
   <div class="border-t-2 py-5">
      @foreach($categories as $category)
      <input type="checkbox" class="h-7 w-7" name="{{ $category->id }}" value="{{ $category->id }}" />
      <label for="{{ $category->name }}">{{ $category->name }}</label>
         <br />
      @endforeach
   </div>
   <div class="border-t-2 py-5">
      @foreach($subcategories as $subcategory)
      <input type="checkbox" class="h-7 w-7" name="{{ $subcategory->name }}" />
      <label for="{{ $subcategory->name }}">{{ $subcategory->name }}</label>
         <br />
      @endforeach
   </div>
      <div class="border-t-2 py-5">
      @foreach($sizes as $size)
      <input type="checkbox" class="h-7 w-7" name="{{ $size->name }}" />
      <label for="{{ $size->name }}">{{ $size->name }}</label>
         <br />
      @endforeach
   </div>
   <div class="flex justify-start">
      <a class="py-2 px-3 bg-blue-400 text-white text-xs">
         ФИЛТРИРАЙ
      </a>
   </div>
</div>
