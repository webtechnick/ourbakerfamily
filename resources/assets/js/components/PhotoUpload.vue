<template>
    <div v-cloak>
        <div id="addphotos" class="dropzone photo-form">
        </div>
    </div>
</template>

<script>
    export default {
        'props' : [
            'action',
        ],
        data() {
            return {
                'dropzone' : null,
            };
        },
        mounted() {
            // Have to run a timeout for some reason.
            // when run instant I get /personas/undefined/photos as action
            this.loadDropzone();
            // setTimeout(this.loadDropzone.bind(this), 50);
        },
        methods: {
            added(file, response) {
                Events.$emit('FileUploaded', file);
                Events.$emit('PhotoAdded', response);
            },
            error(file, error, xhr) {
                let message = error.message;

                if (error.errors && error.errors.photo && error.errors.photo.length) {
                    message = error.errors.photo[0];
                }

                // file.previewTemplate.appendChild(document.createTextNode(error.message));
                let errors = file.previewElement.querySelectorAll("[data-dz-errormessage]");
                if (errors.length) {
                    errors[0].textContent = message;
                }
            },
            loadDropzone() {
                this.dropzone = new Dropzone("div#addphotos", {
                    url: this.action,
                    headers: {
                        'X-CSRF-TOKEN': token.content,
                    },
                    paramName: 'photo',
                    maxFileSize: 6,
                    acceptedFiles: '.jpg, .jpeg, .png, .gif'
                });
                this.dropzone.on('success', this.added.bind(this));
                this.dropzone.on('error', this.error.bind(this));
            },
        }
    }
</script>
<style>
.photo-form {
    border: 2px #AB2516 dashed;
    background: #333;
}
.photo-form .dz-preview.dz-image-preview {
    background: #333;
}
</style>