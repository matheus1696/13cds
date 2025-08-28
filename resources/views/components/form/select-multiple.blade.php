@props(['name'])

<div class="relative">
    <select id="{{ $name }}" name="{{ $name }}[]" multiple>
        <option value="" disabled selected>Selecione</option>
        {{ $slot }}
    </select>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new TomSelect("#{{ $name }}", {
                plugins: ['remove_button'],
                maxOptions: 1000,
                searchField: ['text', 'value'],
                create: false,
                onChange: function(values) {
                    const selectedList = document.getElementById('selected-{{ $name }}');
                    if (selectedList) {
                        selectedList.innerHTML = values.map(value => {
                            const option = document.querySelector(`#{{ $name }} option[value="${value}"]`);
                            return `<li class="p-1 bg-red-200 text-gray-800 rounded mb-1 shadow-sm">${option.textContent}</li>`;
                        }).join('');
                    }
                }
            });
        });
    </script>
</div>
