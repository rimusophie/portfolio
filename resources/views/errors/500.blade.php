@extends(Constants::LAYOUT_FILE_BASE)
@section(Constants::LAYOUT_SECTION_TITLE, Constants::TITLE_500)
@section(Constants::LAYOUT_SECTION_MAIN)
{{-- コメント --}}
<div>
    <p>{{ $error }}</p>
</div>

@endsection