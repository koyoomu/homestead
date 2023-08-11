<x-layout>
    <a href="{{ route('index.posts')}}" class="re">戻る</a>
        <h1>新規追加</h1>
        <form action="{{ route('store.posts') }}" method="post">
            @csrf

            <label>
                Title
                <input type="text" name="title">
            </label>
            <label>
                Detail
                <textarea name="detail" rows="10"></textarea>
            </label>
            <div class="btn"><button>新規追加</button></div>
        </form>
</x-layout>
