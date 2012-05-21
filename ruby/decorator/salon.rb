require_relative "Decorators/coloring_decorator"
require_relative "Decorators/styling_decorator"
require_relative "Decorators/haircut_decorator"
require_relative "female_salon_service"
require_relative "male_salon_service"

class Salon
  def provideService
    salonService = FemaleSalonService.new
    salonService = ColoringDecorator.new(salonService)
    salonService = StylingDecorator.new(salonService)
    salonService = HaircutDecorator.new(salonService)

    puts salonService.getDescription
  end
end