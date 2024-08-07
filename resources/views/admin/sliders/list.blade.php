<x-wire-table>
    {{-- 테이블 제목 --}}
    <x-wire-thead>

        <th width='100'>이미지</th>
        <th>제목</th>

        <th width='100'>price</th>
        <th width='100'>link</th>
        <th width='100'>status</th>

        <th width='200'>등록일자</th>
    </x-wire-thead>
    <tbody>
        @if(!empty($rows))
            @foreach ($rows as $item)
            {{-- 테이블 리스트 --}}
            <x-wire-tbody-item :selected="$selected" :item="$item">

                <td width='100'>{{$item->image}}</td>
                <td>
                    <x-click wire:click="edit({{$item->id}})">
                        {{$item->title}}
                    </x-click>
                    <p>
                        {{$item->subtitle}}
                    </p>
                </td>
                <td width='100'></td>
                <td width='100'>{{$item->link}}</td>
                <td width='100'>{{$item->status}}</td>
                <td width='200'>{{$item->created_at}}</td>
            </x-wire-tbody-item>
            @endforeach
        @endif
    </tbody>
</x-wire-table>
