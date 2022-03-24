from PIL import Image
from pixelmatch.contrib.PIL import pixelmatch

# small script to test pixelmatch, uses python imaging library

# images for the comparison
img_1 = Image.open("Images/finalsheet.jpg")
img_2 = Image.open("Images/prefinal sheet.jpg")

# comparison image that gets created, mode and size of first image
img_diff = Image.new("RGBA", img_1.size)

# float for threshold sensitivity, includeAA detects and ignores anti-aliased pixels
mismatch = pixelmatch(img_1, img_2, img_diff, 0.5, includeAA=True)

# save the differences to a new file
img_diff.save("Images/diff.png")