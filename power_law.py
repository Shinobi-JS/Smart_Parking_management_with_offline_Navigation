
import cv2
import numpy as np
# Open the image.
image = cv2.imread( './images/IMGKHR34K9060fHJk7H8ksUjn.jpeg')

# Sample gamma values to test
for gamma in [0.2, 0.5, 1, 1.5, 1.8]:
    # Apply gamma correction.
    gamma_transformation = np.array(255*(image / 255) ** gamma, dtype = 'uint8')

    cv2.imwrite('gamma_transformed'+str(gamma)+'.jpg', gamma_transformation)
cv2.waitKey(0)
cv2.destroyAllWindows()