from PIL import Image
from pixelmatch.contrib.PIL import pixelmatch

# small script to test pixelmatch

# images for the comparison
img_1 = Image.open("Images/test_image1.jpeg")
img_2 = Image.open("Images/edited_test_image1.jpeg")

# comparison image that gets created, mode and with size of first image
img_diff = Image.new("RGBA", img_1.size)

mismatch = pixelmatch(img_1, img_2, img_diff, 0.1, includeAA=True)

img_diff.save("Images/diff.png")