<template>
    <div class="form-check">
        <input :class="inputClass"
               type="checkbox"
               :id="id"
               @change="$emit('update:modelValue', $event.target.checked)"
               :checked="modelValue"
        >
        <label :for="id" :class="labelClass">{{ label }}</label>
        <span class="text-danger" v-if="error">{{ error }}</span>
    </div>
</template>

<script setup>
defineProps({
    modelValue: Boolean,
    label: String,
    id: String,
    error: String,
    inputClass: {
        type: String,
        default: "form-check-input",
    },
    labelClass: {
        type: String,
        default: "form-check-label",
    },
})
</script>
