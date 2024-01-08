@extends(Constants::LAYOUT_FILE_BASE)
@section(Constants::LAYOUT_SECTION_TITLE, 'rimusophie - ポートフォリオ')
@section(Constants::LAYOUT_SECTION_MAIN)
<div>
</div>
<div>
@empty($skills)
    <p>データがありません。</p>
@else
    {{-- スキル一覧 --}}
    <table>
        <tr>
            <th>識別番号</th>
            <th>名称</th>
            @if ($is_maintenance == true)
            <th></th>
            <th></th>
            @endif
        </tr>

        @foreach ($skills as $skill)
        <tr>
            <td>{{ $skill->id }}</td>       {{-- 識別番号 --}}
            <td>{{ $skill->name }}</td>     {{-- 名称 --}}
            @if ($is_maintenance == true)   {{-- メンテナンスモードのときは編集削除が可能 --}}
            <td><button type="submit" formaction="#">編集</button></td>
            <td><button type="submit" formaction="#">削除</button></td>
            @endif
        </tr>
        @endforeach
    </table>
</div>
@endempty
@endsection