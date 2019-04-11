<template>
<div class="details-reset details-overlay details-overlay-dark" :open="value">
    <summary></summary>
    <details-dialog v-if="value" class="anim-fade-in fast Box Box--overlay text-gray-dark f5" aria-labelledby="transfer-dialog-title" role="dialog">
        <slot/>
    </details-dialog>
</div>
</template>

<script>
export default {
    props: ['value'],
}
</script>
