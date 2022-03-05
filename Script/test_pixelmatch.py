from PIL import Image
from pixelmatch.contrib.PIL import pixelmatch

# small script to test pixelmatch

# images for the comparison
img_1 = Image.open("Images/a.jpg")
img_2 = Image.open("Images/b.jpg")

# comparison image that gets created, mode and with size of first image
img_diff = Image.new("RGBA", img_1.size)

mismatch = pixelmatch(img_1, img_2, img_diff, 0.4, includeAA=True)

img_diff.save("Images/diff.png")