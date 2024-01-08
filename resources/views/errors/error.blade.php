@extends(Constants::LAYOUT_FILE_BASE)
@section(Constants::LAYOUT_SECTION_TITLE, Constants::TITLE_ERROR)
@section(Constants::LAYOUT_SECTION_MAIN)
{{-- コメント --}}
<div>
{{ $error }}
</div>
@endsection