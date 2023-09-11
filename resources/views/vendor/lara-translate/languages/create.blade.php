@extends("lara-translate::layout")
@section("content")
<div class="panel my-12">
    <div class="panel-header">
        {{__("Add a language")}}
    </div>
    <form action="{{ route('lara-translate.store') }}" method="POST">
        <fieldset>
            @csrf
            <div class="panel-body p-4">

                <div class="input-group">
                    <label for="key">
                        {{__("Name")}} <stong>*</stong>
                    </label>
                    <input name="name" id="name" type="text" value="" />
                </div>
            </div>
        </fieldset>
        <div class="panel-footer flex flex-row-reverse">
            <button class="button button-black" style="margin-left: 10px;">
                {{__("Save")}}
            </button>
            <button href="{{ route('lara-translate.index') }}" class="button button-black">
                {{__("Back")}}
            </button>
        </div>
    </form>
</div>
@endsection