@component('components.modal', [
    'title' => 'Transfer Issue',
    'cta' => 'Transfer Issue',
])
    <input
        name="search"
        type="text"
        class="width-full form-control"
        placeholder="Choose a repository..."
        autocomplete="off"
    >
    <div id="repo-list">
        {{-- Will be replaced by Intercooler --}}
    </div>
@endcomponent
