<div x-data="{
    loading: false,
    submit() {
        if (!this.loading) {
            this.loading = true;
            $el.querySelector('button[type=button]').form.submit();
        }
    }
}" x-init="
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' && !e.shiftKey && !e.ctrlKey && !e.altKey) {
            e.preventDefault();
            submit();
        }
    });
"
    class="w-full flex justify-center items-center space-x-2"
>
    <button
        x-bind:disabled="loading"
        type="button"
        x-on:click="loading = true; $el.form.submit()"
        {{ $attributes->merge([
            'class' => 'px-5 py-2 rounded-md bg-blue-600 text-white text-xs font-medium 
                        hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-300 
                        transition duration-200 active:scale-95 
                        disabled:opacity-50 disabled:cursor-not-allowed'
        ]) }}
    >
        <span x-show="!loading">{{ $slot }}</span>
        <span x-show="loading">{{ __('Sending ...')}}</span>
    </button>
</div>

