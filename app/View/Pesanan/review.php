<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulasan Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container-review {
            max-width: 650px;
            margin: 0 auto;
        }

        .card-review {
            border: none;
            border-radius: 15px;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }

        .card-header-review {
            background-color: #6c5ce7;
            color: white;
            border-radius: 15px 15px 0 0 !important;
            font-weight: 600;
            padding: 1rem;
            text-align: center;
        }

        .card-body-review {
            padding: 1.5rem;
        }

        .btn-primary-review {
            background-color: #6c5ce7;
            border-color: #6c5ce7;
            width: 100%;
            padding: 0.6rem;
        }

        .btn-primary-review:hover {
            background-color: #5f50e6;
            border-color: #5f50e6;
        }

        .btn-secondary-review {
            background-color: transparent;
            border-color: #6c757d;
            color: #6c757d;
            width: 100%;
            padding: 0.6rem;
        }

        /* Rating stars styling */
        .rating-review {
            display: flex;
            flex-direction: row-reverse;
            justify-content: center;
            gap: 0.5rem;
        }

        .rating-review input {
            display: none;
        }

        .rating-review label {
            cursor: pointer;
            font-size: 2.5rem;
            color: #ccc;
            transition: color 0.3s;
        }

        .rating-review input:checked~label,
        .rating-review label:hover,
        .rating-review label:hover~label {
            color: #ffc107;
        }

        /* Image upload styling */
        .preview-container-review {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 10px;
        }

        .preview-item-review {
            position: relative;
            width: 100px;
            height: 100px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .preview-item-review img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .preview-remove-review {
            position: absolute;
            top: 5px;
            right: 5px;
            background: rgba(0, 0, 0, 0.6);
            color: white;
            border-radius: 50%;
            width: 22px;
            height: 22px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 14px;
        }

        .custom-file-upload-review {
            border: 2px dashed #ccc;
            border-radius: 10px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 25px;
            cursor: pointer;
            width: 100px;
            height: 100px;
            text-align: center;
            color: #6c757d;
            transition: all 0.3s;
        }

        .custom-file-upload-review:hover {
            border-color: #6c5ce7;
            color: #6c5ce7;
        }

        .toast-review {
            background-color: #fff;
            border-left: 4px solid #6c5ce7;
        }

        .toast-header-review {
            background-color: #f8f9fa;
            color: #6c5ce7;
            font-weight: 600;
        }

        .mb-review {
            margin-bottom: 1.5rem;
        }

        .form-label-review {
            font-weight: 600;
            margin-bottom: 0.5rem;
            display: block;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <div class="container-review">
            <div class="card-review">
                <div class="card-header-review">
                    <h4 class="mb-0">Beri Ulasan Produk</h4>
                </div>
                <div class="card-body-review">
                    <form id="reviewForm" class="needs-validation" novalidate>
                        <input type="hidden" id="productId" name="productId" value="1">

                        <!-- Rating stars -->
                        <div class="mb-review text-center">
                            <label class="form-label-review mb-3">Berikan Penilaian</label>
                            <div class="rating-review mb-2">
                                <input type="radio" name="rating" id="star5" value="5" required>
                                <label for="star5" class="bi bi-star-fill"></label>
                                <input type="radio" name="rating" id="star4" value="4">
                                <label for="star4" class="bi bi-star-fill"></label>
                                <input type="radio" name="rating" id="star3" value="3">
                                <label for="star3" class="bi bi-star-fill"></label>
                                <input type="radio" name="rating" id="star2" value="2">
                                <label for="star2" class="bi bi-star-fill"></label>
                                <input type="radio" name="rating" id="star1" value="1">
                                <label for="star1" class="bi bi-star-fill"></label>
                            </div>
                            <div class="invalid-feedback">
                                Silakan berikan penilaian bintang
                            </div>
                        </div>

                        <!-- Comment textarea -->
                        <div class="mb-review">
                            <label for="comment" class="form-label-review">Tulis Ulasan</label>
                            <textarea class="form-control" id="comment" name="comment" rows="4"
                                placeholder="Bagikan pengalaman Anda dengan produk ini..." required></textarea>
                            <div class="invalid-feedback">
                                Silakan tulis ulasan Anda
                            </div>
                        </div>

                        <!-- Photo upload -->
                        <div class="mb-review">
                            <label class="form-label-review">Tambahkan Foto (Opsional)</label>
                            <div>
                                <div class="preview-container-review">
                                    <label for="photo-upload" class="custom-file-upload-review">
                                        <i class="bi bi-camera fs-3"></i>
                                    </label>
                                    <input type="file" id="photo-upload" accept="image/jpeg,image/png" multiple style="display: none;">
                                </div>
                                <small class="text-muted mt-2 d-block">Maksimal 3 foto (JPG/PNG)</small>
                            </div>
                        </div>

                        <!-- Submit buttons -->
                        <div class="d-grid gap-2 mt-4">
                            <button type="submit" class="btn btn-primary-review">Kirim Ulasan</button>
                            <button type="button" class="btn btn-secondary-review" onclick="window.history.back()">Kembali</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Toast notification -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="reviewToast" class="toast toast-review" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header toast-header-review">
                <strong class="me-auto">Notifikasi</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Ulasan berhasil dikirim! Terima kasih atas feedback Anda.
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Array to store uploaded photos
        let uploadedPhotos = [];

        // Add event listeners when DOM is ready
        document.addEventListener('DOMContentLoaded', function() {
            // Set up form validation
            setupFormValidation();

            // Set up photo upload functionality
            document.getElementById('photo-upload').addEventListener('change', handleFileSelect);
        });

        // Handle file selection
        function handleFileSelect(event) {
            const files = event.target.files;
            if (!files || !files.length) return;

            // Limit to 3 photos
            if (uploadedPhotos.length + files.length > 3) {
                alert('Maksimal 3 foto yang dapat diunggah');
                return;
            }

            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                if (!file.type.match('image/jpeg') && !file.type.match('image/png')) {
                    alert('Hanya file JPG atau PNG yang diperbolehkan');
                    continue;
                }

                const reader = new FileReader();
                reader.onload = function(e) {
                    uploadedPhotos.push({
                        file: file,
                        preview: e.target.result
                    });
                    updatePhotoPreview();
                };
                reader.readAsDataURL(file);
            }
        }

        // Update photo preview
        function updatePhotoPreview() {
            const container = document.querySelector('.preview-container-review');

            // Clear existing previews except the upload button
            const uploadButton = container.querySelector('label.custom-file-upload-review');
            container.innerHTML = '';
            container.appendChild(uploadButton);

            // Add new previews
            uploadedPhotos.forEach((photo, index) => {
                const previewItem = document.createElement('div');
                previewItem.className = 'preview-item-review';

                const img = document.createElement('img');
                img.src = photo.preview;

                const removeBtn = document.createElement('div');
                removeBtn.className = 'preview-remove-review';
                removeBtn.innerHTML = '×';
                removeBtn.onclick = function() {
                    uploadedPhotos.splice(index, 1);
                    updatePhotoPreview();
                };

                previewItem.appendChild(img);
                previewItem.appendChild(removeBtn);
                container.appendChild(previewItem);
            });
        }

        // Setup form validation
        function setupFormValidation() {
            const form = document.getElementById('reviewForm');

            form.addEventListener('submit', function(event) {
                event.preventDefault();
                event.stopPropagation();

                if (form.checkValidity()) {
                    submitReview();
                }

                form.classList.add('was-validated');
            });
        }

        // Submit review
        function submitReview() {
            const productId = document.getElementById('productId').value;
            const ratingElement = document.querySelector('input[name="rating"]:checked');

            if (!ratingElement) {
                alert('Silakan berikan penilaian bintang');
                return;
            }

            const rating = ratingElement.value;
            const comment = document.getElementById('comment').value;

            // Create FormData for API submission
            const formData = new FormData();
            formData.append('productId', productId);
            formData.append('rating', rating);
            formData.append('comment', comment);

            // Add photos to FormData
            uploadedPhotos.forEach((photo, index) => {
                formData.append(`photo[${index}]`, photo.file);
            });

            // Log form data (for demonstration)
            console.log('Rating:', rating);
            console.log('Comment:', comment);
            console.log('Number of photos:', uploadedPhotos.length);

            // Show success toast
            const toast = new bootstrap.Toast(document.getElementById('reviewToast'));
            toast.show();

            // Reset form after success
            setTimeout(() => {
                resetForm();
            }, 1500);
        }

        // Reset form
        function resetForm() {
            const form = document.getElementById('reviewForm');
            form.reset();
            form.classList.remove('was-validated');

            uploadedPhotos = [];
            updatePhotoPreview();
        }
    </script>
</body>

</html>