<details class="details-reset details-overlay details-overlay-dark">
    <summary aria-haspopup="dialog">
        <span class="text-bold link-gray-dark lock-toggle-link" aria-haspopup="dialog">
            <svg class="octicon octicon-file-symlink-file" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8.5 1H1c-.55 0-1 .45-1 1v12c0 .55.45 1 1 1h10c.55 0 1-.45 1-1V4.5L8.5 1zM11 14H1V2h7l3 3v9zM6 4.5l4 3-4 3v-2c-.98-.02-1.84.22-2.55.7-.71.48-1.19 1.25-1.45 2.3.02-1.64.39-2.88 1.13-3.73.73-.84 1.69-1.27 2.88-1.27v-2H6z"></path></svg> <strong>Transfer issue</strong>
        </span>
        <span class="lh-condensed px-1 rounded-1 border border-green text-normal f6">Beta</span>
    </summary>

    <details-dialog class="anim-fade-in fast Box Box--overlay text-gray-dark f5" aria-labelledby="transfer-dialog-title" role="dialog">
        <div class="Box-header">
            <h3 id="transfer-dialog-title" class="Box-title">
                {{ $title }}
                <svg class="octicon octicon-info" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M6.3 5.69a.942.942 0 0 1-.28-.7c0-.28.09-.52.28-.7.19-.18.42-.28.7-.28.28 0 .52.09.7.28.18.19.28.42.28.7 0 .28-.09.52-.28.7a1 1 0 0 1-.7.3c-.28 0-.52-.11-.7-.3zM8 7.99c-.02-.25-.11-.48-.31-.69-.2-.19-.42-.3-.69-.31H6c-.27.02-.48.13-.69.31-.2.2-.3.44-.31.69h1v3c.02.27.11.5.31.69.2.2.42.31.69.31h1c.27 0 .48-.11.69-.31.2-.19.3-.42.31-.69H8V7.98v.01zM7 2.3c-3.14 0-5.7 2.54-5.7 5.68 0 3.14 2.56 5.7 5.7 5.7s5.7-2.55 5.7-5.7c0-3.15-2.56-5.69-5.7-5.69v.01zM7 .98c3.86 0 7 3.14 7 7s-3.14 7-7 7-7-3.12-7-7 3.14-7 7-7z"></path></svg>
                <span class="lh-condensed px-1 rounded-1 border border-green mx-2 f6">Beta</span>
            </h3>
        </div>
        <div class="Box-row">
            {{ $slot }}
        </div>
        <div class="Box-footer">
            <button class="btn btn-block">{{ $cta }}</button>
        </div>
    </details-dialog>
</details>
