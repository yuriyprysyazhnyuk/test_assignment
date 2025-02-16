<template>
    <div>
        <label :for="id" :class="labelClass" v-if="label">{{ label }}:</label>
        <input
            :id="id"
            :value="modelValue"
            @change="$emit('update:modelValue', $event.target.value)"
            type="text"
            :class="inputClass"
            :placeholder="placeholder"
        />
        <span class="text-danger" v-if="error">{{ error }}</span>
    </div>
</template>

<script setup>
defineProps({
    modelValue: String,
    label: String,
    id: String,
    error: String,
    inputClass: {
        type: String,
        default: "form-control",
    },
    labelClass: {
        type: String,
        default: "form-label",
    },
    placeholder: String
})
</script>
